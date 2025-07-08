// Pie Chart for Languages
    const languageCtx = document.getElementById('languageChart').getContext('2d');
    new Chart(languageCtx, {
        type: 'pie',
        data: {
            labels: ['JavaScript', 'HTML', 'CSS', 'PHP'],
            datasets: [{
                data: [40, 25, 20, 15],
                backgroundColor: ['#f1e05a', '#e34c26', '#563d7c', '#4F5D95'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });

    // Bar Chart for Projects
    const projectCtx = document.getElementById('projectChart').getContext('2d');
    new Chart(projectCtx, {
        type: 'bar',
        data: {
            labels: ['Completed', 'In Progress', 'Pending'],
            datasets: [{
                label: 'Projects',
                data: [8, 3, 1],
                backgroundColor: ['#2ecc71', '#f39c12', '#e74c3c']
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1
                    }
                }
            }
        }
    });
