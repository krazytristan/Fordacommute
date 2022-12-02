Chart.defaults.font.size = 25;
//setup
const data = {
    labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sad', 'Sun'],
        datasets: [{
            data: [12, 19, 3, 5, 2, 3, 14],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(51, 202, 27, 1)'
            ],
        }]
};

//options
const options = {
    plugins: {
        legend: {
            display: false,
        },
        title:{
            display: true,
            text: "Number of Downloads"
        }
    },
    scales: {
        y: {
            beginAtZero: true
        }
    }
};

//config
const config = {
    type: 'bar',
    data: data,
    options,
    
};

//render init
const barchartD = new Chart(
    document.getElementById('barchartD'),
    config 
);