var colors = ['#0080ff', '#ff0080', '#bfff00'];
var chart_data = {
    labels: ['Opcion 1', 'Opcion 2', 'Opcion 3'],
    datasets:[
        {
            label:'Vote',
            backgroundColor: colors,
            color:'#fff',
            data: [30, 60, 10]
        }
    ]
};

var group_chart1 = $('#pie_chart');

var graph1 = new Chart(group_chart1, {
    type:"pie",
    data:chart_data
});