Chart.defaults.font.size = 25;
//setup
const data = {
    labels: ['18-24', '25-34', '35-44', '45-54'],
    datasets: [{
        data: [22, 53, 14, 10],
        backgroundColor: [
            'rgba(194, 248, 38, 1)',
            'rgba(40, 220, 116, 1)',
            'rgba(40, 143, 220, 1)',
            'rgba(244, 167, 45, 1)'
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
            text: "Age"
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