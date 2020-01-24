 window.Apex = {
     stroke: {
         width: 3
     },
     markers: {
         size: 0
     },
     tooltip: {
         fixed: {
             enabled: true,
         }
     }
 };

 var randomizeArray = function (arg) {
     var array = arg.slice();
     var currentIndex = array.length,
         temporaryValue, randomIndex;

     while (0 !== currentIndex) {

         randomIndex = Math.floor(Math.random() * currentIndex);
         currentIndex -= 1;

         temporaryValue = array[currentIndex];
         array[currentIndex] = array[randomIndex];
         array[randomIndex] = temporaryValue;
     }

     return array;
 }

 // data for the sparklines that appear below header area
 var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];

 var spark1 = {
     chart: {
         type: 'area',
         height: 160,
         sparkline: {
             enabled: true
         },
     },
     stroke: {
         curve: 'straight'
     },
     fill: {
         opacity: 0.3,
     },
     series: [{
         data: randomizeArray(sparklineData)
      }],
     yaxis: {
         min: 0
     },
     colors: ['#DCE6EC'],
     title: {
         text: '$424,652',
         offsetX: 0,
         style: {
             fontSize: '24px',
             cssClass: 'apexcharts-yaxis-title'
         }
     },
     subtitle: {
         text: 'Sales',
         offsetX: 0,
         style: {
             fontSize: '14px',
             cssClass: 'apexcharts-yaxis-title'
         }
     }
 }

 var spark2 = {
     chart: {
         type: 'area',
         height: 160,
         sparkline: {
             enabled: true
         },
     },
     stroke: {
         curve: 'straight'
     },
     fill: {
         opacity: 0.3,
     },
     series: [{
         data: randomizeArray(sparklineData)
      }],
     yaxis: {
         min: 0
     },
     colors: ['#DCE6EC'],
     subtitle: {
         text: 'Expenses',
         offsetX: 0,
         style: {
             fontSize: '14px',
             cssClass: 'apexcharts-yaxis-title'
         }
     }
 }

 var spark3 = {
     chart: {
         type: 'area',
         height: 90,
         sparkline: {
             enabled: true
         },
     },
     stroke: {
         curve: 'straight'
     },
     fill: {
         opacity: 0.3
     },
     series: [{
         data: randomizeArray(sparklineData)
      }],
     xaxis: {
         crosshairs: {
             width: 1
         },
     },
     yaxis: {
         min: 0
     },
 }

 var spark1 = new ApexCharts(document.querySelector("#spark1"), spark1);
 spark1.render();
 var spark2 = new ApexCharts(document.querySelector("#spark2"), spark2);
 spark2.render();
 var spark3 = new ApexCharts(document.querySelector("#spark3"), spark3);
 spark3.render();

 var options1 = {
     chart: {
         type: 'line',
         height: 50,
         sparkline: {
             enabled: true
         }
     },
     series: [{
         data: [120, 186, 124, 189, 220, 140, 244, 188, 236, 150, 294]
      }],
     tooltip: {
         fixed: {
             enabled: false
         },
         x: {
             show: false
         },
         y: {
             title: {
                 formatter: function (seriesName) {
                     return ''
                 }
             }
         },
         marker: {
             show: false
         }
     }
 }

 var options2 = {
     chart: {
         type: 'line',
         width: 100,
         height: 35,
         sparkline: {
             enabled: true
         }
     },
     series: [{
         data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14]
      }],
     tooltip: {
         fixed: {
             enabled: false
         },
         x: {
             show: false
         },
         y: {
             title: {
                 formatter: function (seriesName) {
                     return ''
                 }
             }
         },
         marker: {
             show: false
         }
     }
 }

 var options3 = {
     chart: {
         type: 'line',
         height: 100,
         sparkline: {
             enabled: true
         }
     },
     series: [{
         data: [147, 145, 174, 114, 156, 174, 114, 111, 107, 139, 182]
      }],
     tooltip: {
         fixed: {
             enabled: false
         },
         x: {
             show: false
         },
         y: {
             title: {
                 formatter: function (seriesName) {
                     return ''
                 }
             }
         },
         marker: {
             show: false
         }
     }
 }

 var options4 = {
     chart: {
         type: 'line',
         width: 100,
         height: 35,
         sparkline: {
             enabled: true
         }
     },
     series: [{
         data: [15, 75, 47, 65, 14, 2, 41, 54, 4, 27, 15]
      }],
     tooltip: {
         fixed: {
             enabled: false
         },
         x: {
             show: false
         },
         y: {
             title: {
                 formatter: function (seriesName) {
                     return ''
                 }
             }
         },
         marker: {
             show: false
         }
     }
 }

 var options5 = {
     chart: {
         type: 'bar',
         height: 50,
         sparkline: {
             enabled: true
         }
     },
     plotOptions: {
         bar: {
             columnWidth: '80%'
         }
     },
     series: [{
         data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
      }],
     labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
     xaxis: {
         crosshairs: {
             width: 1
         },
     },
     tooltip: {
         fixed: {
             enabled: false
         },
         x: {
             show: false
         },
         y: {
             title: {
                 formatter: function (seriesName) {
                     return ''
                 }
             }
         },
         marker: {
             show: false
         }
     }
 }

 var options6 = {
     chart: {
         type: 'bar',
         height: 100,
         sparkline: {
             enabled: true
         }
     },
     plotOptions: {
         bar: {
             columnWidth: '50%'
         }
     },
     colors: '#00d97e',
     series: [{
         data: [88, 76, 70, 88, 90, 88, 77, 75, 65, 88, 70]
      }],
     labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
     xaxis: {
         crosshairs: {
             width: 1
         },
     },
     tooltip: {
         fixed: {
             enabled: false
         },
         x: {
             show: false
         },
         y: {
             title: {
                 formatter: function (seriesName) {
                     return ''
                 }
             }
         },
         marker: {
             show: false
         }
     }
 }

 var options7 = {
     chart: {
         type: 'bar',
         width: 100,
         height: 35,
         sparkline: {
             enabled: true
         }
     },
     plotOptions: {
         bar: {
             columnWidth: '80%'
         }
     },
     series: [{
         data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82]
      }],
     labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
     xaxis: {
         crosshairs: {
             width: 1
         },
     },
     tooltip: {
         fixed: {
             enabled: false
         },
         x: {
             show: false
         },
         y: {
             title: {
                 formatter: function (seriesName) {
                     return ''
                 }
             }
         },
         marker: {
             show: false
         }
     }
 }

 var options8 = {
     chart: {
         type: 'bar',
         width: 100,
         height: 35,
         sparkline: {
             enabled: true
         }
     },
     plotOptions: {
         bar: {
             columnWidth: '80%'
         }
     },
     series: [{
         data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
      }],
     labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
     xaxis: {
         crosshairs: {
             width: 1
         },
     },
     tooltip: {
         fixed: {
             enabled: false
         },
         x: {
             show: false
         },
         y: {
             title: {
                 formatter: function (seriesName) {
                     return ''
                 }
             }
         },
         marker: {
             show: false
         }
     }
 }

 var colors = [
        '#2c7be5'
      ]
 var options = {
     chart: {
         height: 350,
         type: 'bar',
         events: {
             click: function (chart, w, e) {
                 console.log(chart, w, e)
             }
         }
     },
     colors: colors,
     plotOptions: {
         bar: {
             columnWidth: '20%',
             distributed: true
         }
     },
     dataLabels: {
         enabled: false
     },
     series: [
         {
             data: [124, 222, 180, 158, 156, 141, 151, 130]
          }
        ],
     xaxis: {
         categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'June',
            'July',
            'Aug'
          ],
         labels: {
             style: {
                 colors: colors,
                 fontSize: '14px'
             }
         }
     },
     legend: {
         position: 'top'
     }
 }

 var chart = new ApexCharts(document.querySelector('#chart'), options)

 chart.render()


 var options = {
     chart: {
         type: 'donut',
         height: 300
     },
     series: [44, 55, 41, 17, 15],
     responsive: [{
         breakpoint: 480,
         options: {
             legend: {
                 position: 'bottom'
             }
         }
            }]
 }

 var chart = new ApexCharts(
     document.querySelector("#chart9"),
     options
 );

 chart.render();

 var lastDate = 0;
 var data = []
 var TICKINTERVAL = 86400000
 let XAXISRANGE = 777600000

 function getDayWiseTimeSeries(baseval, count, yrange) {
     var i = 0;
     while (i < count) {
         var x = baseval;
         var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

         data.push({
             x,
             y
         });
         lastDate = baseval
         baseval += TICKINTERVAL;
         i++;
     }
 }

 getDayWiseTimeSeries(new Date('11 Feb 2019 GMT').getTime(), 10, {
     min: 10,
     max: 90
 })

 function getNewSeries(baseval, yrange) {
     var newDate = baseval + TICKINTERVAL;
     lastDate = newDate

     for (var i = 0; i < data.length - 10; i++) {
         // IMPORTANT
         // we reset the x and y of the data which is out of drawing area
         // to prevent memory leaks
         data[i].x = newDate - XAXISRANGE - TICKINTERVAL
         data[i].y = 0
     }

     data.push({
         x: newDate,
         y: Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min
     })

 }

 function resetData() {
     // Alternatively, you can also reset the data at certain intervals to prevent creating a huge series 
     data = data.slice(data.length - 10, data.length);
 }

 var options = {
     chart: {
         height: 400,
         type: 'line',
         animations: {
             enabled: true,
             easing: 'linear',
             dynamicAnimation: {
                 speed: 1500
             }
         },
         toolbar: {
             show: false
         },
         zoom: {
             enabled: false
         }
     },
     dataLabels: {
         enabled: false
     },
     stroke: {
         curve: 'smooth'
     },
     series: [{
         data: data
            }],
     markers: {
         size: 0
     },
     xaxis: {
         type: 'datetime',
         range: XAXISRANGE,
     },
     yaxis: {
         max: 100
     },
     legend: {
         show: false
     },
 }

 var chart = new ApexCharts(
     document.querySelector("#chart10"),
     options
 );

 chart.render();

 window.setInterval(function () {
     getNewSeries(lastDate, {
         min: 10,
         max: 90
     })
     chart.updateSeries([{
         data: data
            }])
 }, 1000)

 new ApexCharts(document.querySelector("#chart1"), options1).render();
 new ApexCharts(document.querySelector("#chart2"), options2).render();
 new ApexCharts(document.querySelector("#chart3"), options3).render();
 new ApexCharts(document.querySelector("#chart4"), options4).render();
 new ApexCharts(document.querySelector("#chart5"), options5).render();
 new ApexCharts(document.querySelector("#chart6"), options6).render();
 new ApexCharts(document.querySelector("#chart7"), options7).render();
 new ApexCharts(document.querySelector("#chart8"), options8).render();
 new ApexCharts(document.querySelector("#chart9"), options9).render();
 new ApexCharts(document.querySelector("#chart10"), options9).render();