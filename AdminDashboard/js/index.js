var chart = c3.generate({
  bindto: d3.select('.chart'),
  data: {
    columns: [
      ['data1', 30, 200, 100, 400, 150, 250],
      ['data2', 50, 20, 10, 40, 15, 25]
    ]
  },
    color: {
      pattern: ['#EA2E49','#77C4D3','#22475E','#FF9D84','#75B08A' ,'#FF5460' ]
    }
});

var chart = c3.generate({
	bindto: d3.select('.chart1'),
    data: {
        columns: [
            ['data1', 130, 200, 320, 400, 530, 750],
            ['data2', -130, 10, 130, 200, 150, 250],
            ['data3', -130, -50, -10, -200, -250, -150]
        ],
        type: 'bar',
        groups: [
            ['data1', 'data2', 'data3']
        ],
        order: 'desc' // stack order by sum of values descendantly. this is default.
//      order: 'asc'  // stack order by sum of values ascendantly.
//      order: null   // stack order by data definition.
    },
    color: {
      pattern: ['#EA2E49','#75B08A','#22475E','#FF9D84' ,'#FF5460' ]
    },
    grid: {
        y: {
            lines: [{value:0}]
        }
    }
});


var chart = c3.generate({
	bindto: d3.select('.chart2'),
    data: {
        columns: [
            ['data1', 300, 350, 300, 0, 0, 100],
            ['data2', 130, 100, 140, 200, 150, 50],
        ],
        types: {
            data1: 'step',
            data2: 'area-step'
        }
    },
    color: {
      pattern: ['#75B08A','#FF9D84','#75B08A', '#FF5460']
    }
});


var chart = c3.generate({
	bindto: d3.select('.chart3'),
    data: {
        columns: [
            ['data1', 30],
            ['data2', 120],
        ],
        type : 'donut',
        onclick: function (d, i) { console.log("onclick", d, i); },
        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
    },
    color: {
        pattern: ['#FF9D84','75B08A', '#77C4D3', '#22475E', '#EA2E49','#FF5460']
    },
    donut: {
        title: "Iris Petal Width"
    }
});

setTimeout(function () {
    chart.load({
        columns: [
            ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
            ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
            ["virginica", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
        ]
    });
}, 1500);

setTimeout(function () {
    chart.unload({
        ids: 'data1'
    });
    chart.unload({
        ids: 'data2'
    });
}, 2500);
