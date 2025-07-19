document.addEventListener('DOMContentLoaded', () => {
    const reservationContainer = document.getElementById('reservation-container');
    const className = "Personal Training"; // Set your class name here

    let lastDisplayedData = null;

    // Function to fetch and display reservations based on the current system time
    function updateReservations() {
        const now = new Date(); // Get the current system time

        // Get current hours, minutes, and seconds from the actual current time
        const currentHour = now.getHours();
        const currentMinutes = now.getMinutes();
        const currentSeconds = now.getSeconds();
        const currentDateStr = now.toISOString().slice(0, 10); // Format the current date as YYYY-MM-DD

        let timesToFetch = [];

        // Determine which reservations to display based on the current time
        if (currentMinutes < 50) {
            // Before :50 minutes past the hour: Display current hour reservations only
            timesToFetch = [{ date: currentDateStr, hour: currentHour }];
        } else {
            // From :50 minutes past the hour: Display current and next hour reservations
            timesToFetch = [{ date: currentDateStr, hour: currentHour }];

            let nextHour = currentHour + 1;
            let nextDate = new Date(now);

            // Handle the transition to the next day
            if (nextHour >= 24) {
                nextHour = 0;
                nextDate.setDate(now.getDate() + 1);
            }

            timesToFetch.push({ date: nextDate.toISOString().slice(0, 10), hour: nextHour });
        }

        // Log times to fetch for debugging
        console.log('Times to Fetch:', timesToFetch);

        // Get the unique dates to fetch
        let datesToFetch = [...new Set(timesToFetch.map(time => time.date))];

        // Function to fetch data for a specific date
        function fetchDataForDate(date) {
            const apiUrl = `proxy.php?date=${date}&branch=${branch}`; // Pass date and branch to proxy.php

            console.log(`Fetching data for date: ${date} and branch: ${branch}`);

            return fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        console.log(`Error fetching data for date ${date}: ${data.error}`);
                        return [];
                    }

                    // Ensure data is an array
                    if (!Array.isArray(data)) {
                        data = [data];
                    }

                    const classesForDate = timesToFetch.filter(time => time.date === date);

                    const classesForTimes = data.filter(classItem => {
                        const classHour = parseInt(classItem.class_time.slice(0, 2));
                        const matchesHour = classesForDate.some(time => classHour === time.hour);
                        const matchesClassName = classItem.class_name.trim().toLowerCase() === className.trim().toLowerCase();
                        return matchesHour && matchesClassName;
                    });

                    return classesForTimes;
                });
        }

        Promise.all(datesToFetch.map(date => fetchDataForDate(date)))
            .then(results => {
                const allClasses = results.flat();
                const newDataString = JSON.stringify(allClasses);
                const lastDataString = JSON.stringify(lastDisplayedData);

                if (newDataString === lastDataString) {
                    console.log('No changes in reservations data.');
                    return;
                }

                lastDisplayedData = allClasses;
                reservationContainer.innerHTML = '';

                if (allClasses.length === 0) {
                    reservationContainer.innerHTML = `<p>No classes found matching the specified criteria.</p>`;
                    return;
                }

                allClasses.sort((a, b) => {
                    const dateA = new Date(`${a.class_date}T${a.class_time}`);
                    const dateB = new Date(`${b.class_date}T${b.class_time}`);
                    return dateA - dateB;
                });

                allClasses.forEach(classData => {
                    const classTime = classData.class_time || "Class Time";
                    const className = classData.class_name || "Class";
                    const reservations = classData.reservations || [];

                    let reservationBlock = document.createElement('div');
                    reservationBlock.classList.add('reservation-block');

                    let title = document.createElement('h2');
                    title.innerText = `Reservas de las ${classTime} - ${className}`;
                    reservationBlock.appendChild(title);

                    let reservationList = document.createElement('ul');
                    reservationList.classList.add('reservation-list');

                    reservations.forEach(reservation => {
                        let listItem = document.createElement('li');
                        listItem.innerText = reservation.name;
                        reservationList.appendChild(listItem);
                    });

                    reservationBlock.appendChild(reservationList);
                    reservationContainer.appendChild(reservationBlock);
                });
            })
            .catch(error => {
                console.error('Error fetching reservations:', error);
                reservationContainer.innerHTML = `<p>Error fetching reservations.</p>`;
            });
    }

    updateReservations();
    setInterval(() => {
        updateReservations();
    }, 60000);
});
