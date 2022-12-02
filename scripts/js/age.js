Chart.defaults.font.size = 25;
//setup
const data = {
    labels: ['Female', 'Male', ],
    datasets: [{
        data: [142, 136],
        backgroundColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
        ],
    }]
};

//options
const options = {
    plugins:{
        legend: {
            labels: {
                font: {
                    size: 16
                }
            }
        },
        title:{
            display: true,
            text: "Sex"
        }
    }
};

//config
const config = {
    type: 'pie',
    data: data,
    options,
};

//render init
const pie = new Chart(
    document.getElementById('pie'),
    config
);