Chart.defaults.font.size = 25;
//setup
const data = {
    labels: ['Student', 'Regular', ],
    datasets: [{
        data: [142, 136],
        backgroundColor: [
            'rgba(202, 27, 59, 1)',
            'rgba(82, 42, 242, 1)',
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
            text: "Status"
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