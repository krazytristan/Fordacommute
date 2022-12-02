<br>
<br>
<div class="row">
   <div class="col">
    <h4>Demographics</h4>
   </div>
   <div class="col">

   </div>
  </div>
<br>

                <style>
                    .col{
                        width:25rem;
                    }                    
                </style>


<form id="updateForm" name="theme_setting"  rel="<?php echo $id; ?>" enctype="multipart/form-data">
<div class="row">

    <div class="col">
        <div class="form-group">
            <canvas id="pie"></canvas>
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <canvas id="pie2"></canvas>
        </div>
    </div>
  
    <div class="col">
        <div class="form-group">
            <canvas id="pie3"></canvas>
        </div>
    </div>
  
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
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
                                display:true,
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
            
                    //chart2
                    //setup
                    const data2 = {
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
                    const options2 = {
                        plugins:{
                            legend: {
                                labels: {
                                    font: {
                                        size: 16
                                    }
                                },
                            },
                            title:{
                                display:true,
                                text: "Age"
                            }
                        }
                    };

                    //config
                    const config2 = {
                        type: 'pie',
                        data: data2,
                        options: options2,
                    };

                    //render init
                    const pie2 = new Chart(
                        document.getElementById('pie2'),
                        config2
                    );
                    
                    //chart3
                    //setup
                    const data3 = {
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
                    const options3 = {
                        plugins:{
                            legend: {
                                labels: {
                                    font: {
                                        size: 16
                                    }
                                }
                            },
                            title:{
                                display:true,
                                text: "Status"
                            }
                        }
                    };

                    //config
                    const config3 = {
                        type: 'pie',
                        data: data3,
                        options: options3,
                    };

                    //render init
                    const pie3 = new Chart(
                        document.getElementById('pie3'),
                        config3
                    );
            </script>




</form>