(function ($) {
  //alert(nna_month);
    // USE STRICT
    "use strict";
  
    try {
      //WidgetChart 1
      var ctx = document.getElementById("widgetChart4");
     // var ctx = document.getElementsByClassName("widgetChart1");
      //var count=document.getElementById("countexp").value;
     
      if (ctx) {
        
        ctx.height = 130;
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            type: 'line',
            datasets: [{
              data: nna,
              label: 'Cantidad',
              backgroundColor: 'rgba(255,255,255,.1)',
              borderColor: 'rgba(255,255,255,.55)',
            },]
          },
          options: {
            maintainAspectRatio: true,
            legend: {
              display: false
            },
            layout: {
              padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
              }
            },
            responsive: true,
            
            scales: {
              xAxes: [{
                gridLines: {
                  color: 'transparent',
                  zeroLineColor: 'transparent'
                },
                ticks: {
                  fontSize: 2,
                  fontColor: 'transparent'
                }
              }],
              yAxes: [{
                display: false,
                ticks: {
                  display: false,
                }
              }]
            },
            title: {
              display: true,
            },
            elements: {
              line: {
                borderWidth: 1
              },
              point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
              }
            }
          }
        });
      }
    }
    catch (error) {
        console.log(error);
    }
    try {

      //pie chart
      var ctx = document.getElementById("pieChart");
      if (ctx) {
        ctx.height = 200;
        var myChart = new Chart(ctx, {
          type: 'pie',
          data: {
            datasets: [{
              data: sexo,
              backgroundColor: [
                "rgba(0, 123, 255, 0.8)",
                "rgba(245, 40, 145, 0.8)"
              ],
              hoverBackgroundColor: [
                "rgba(0, 20, 245, 0.8)",
                "rgba(247, 80, 169, 0.8)"
              ]
  
            }],
            labels: [
              "Masculino",
              "Femenino",
              
            ]
          },
          options: {
            plugins: {
              legend: {
                  labels: {
                      // This more specific font property overrides the global property
                      font: {
                          size: 18
                      }
                  }
              }},
            legend: {
              position: 'left',
  
            },
            responsive: true
          }
        });
      }
  
  
    } catch (error) {
      console.log(error);
    }

    try {

      //pie chart
      var ctx = document.getElementById("pieChart2");
      if (ctx) {
        ctx.height = 200;
        var myChart = new Chart(ctx, {
          type: 'pie',
          data: {
            datasets: [{
              data: nacionalidad,
              backgroundColor: [
                "rgba(106, 241, 144)",
                "rgba(213, 242, 84)"
              ],
              hoverBackgroundColor: [
                "rgba(143, 245, 172)",
                "rgba(222, 245, 122)"
              ]
  
            }],
            labels: [
              "Dominicanos",
              "Extranjeros"
            ]
          },
          options: {
            legend: {
              position: 'left',
              labels: {
                
                fontFamily: 'Montserrat'
              }
  
            },
            responsive: true
          }
        });
      }
  
  
    } catch (error) {
      console.log(error);
    }

    var ctx = document.getElementById("widgetChart2");
    if (ctx) {
      ctx.height = 130;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
          type: 'line',
          datasets: [{
            data: psico,
            label: 'Cantidad',
            backgroundColor: 'transparent',
            borderColor: 'rgba(255,255,255,.55)',
          },]
        },
        options: {

          maintainAspectRatio: false,
          legend: {
            display: false
          },
          responsive: true,
          tooltips: {
            mode: 'index',
            titleFontSize: 12,
            titleFontColor: '#000',
            bodyFontColor: '#000',
            backgroundColor: '#fff',
            titleFontFamily: 'Montserrat',
            bodyFontFamily: 'Montserrat',
            cornerRadius: 3,
            intersect: false,
          },
          scales: {
            xAxes: [{
              gridLines: {
                color: 'transparent',
                zeroLineColor: 'transparent'
              },
              ticks: {
                fontSize: 2,
                fontColor: 'transparent'
              }
            }],
            yAxes: [{
              display: false,
              ticks: {
                display: false,
              }
            }]
          },
          title: {
            display: false,
          },
          elements: {
            line: {
              tension: 0.00001,
              borderWidth: 1
            },
            point: {
              radius: 4,
              hitRadius: 10,
              hoverRadius: 4
            }
          }
        }
      });
    }

    var ctx = document.getElementById("widgetChart3");
    if (ctx) {
      ctx.height = 130;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
          type: 'line',
          datasets: [{
            data: psico,
            label: 'Cantidad',
            backgroundColor: 'transparent',
            borderColor: 'rgba(255,255,255,.55)',
          },]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 0,
              bottom: 0
            }
          },
          responsive: true,
          scales: {
            xAxes: [{
              gridLines: {
                color: 'transparent',
                zeroLineColor: 'transparent'
              },
              ticks: {
                fontSize: 2,
                fontColor: 'transparent'
              }
            }],
            yAxes: [{
              display: false,
              ticks: {
                display: false,
              }
            }]
          },
          title: {
            display: true,
          },
          elements: {
            line: {
              borderWidth: 1
            },
            point: {
              radius: 4,
              hitRadius: 10,
              hoverRadius: 4
            }
          }
        }
      });
    }


    //WidgetChart 4
    var ctx = document.getElementById("widgetChar");
    if (ctx) {
      ctx.height = 115;
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
          datasets: [
            {
              label: "My First dataset",
              data: psico,
              borderColor: "transparent",
              borderWidth: "0",
              backgroundColor: "rgba(255,255,255,.3)"
            }
          ]
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: false
          },
          scales: {
            xAxes: [{
              display: false,
              categoryPercentage: 1,
              barPercentage: 0.65
            }],
            yAxes: [{
              display: false
            }]
          }
        }
      });
    }

    

})(jQuery);

