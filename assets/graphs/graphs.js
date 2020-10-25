
	// LINE CHART

	new Chart(document.getElementById("line"), {
	  type: 'line',
	  data: {
	    // ITEMS DEL EJE X
	    labels: [1500,1600,1700],
	    // /.ITEMS DEL EJE X


	    datasets: [
	      // AQUI SE MUESTRAN LOS DATOS DE LA BD
	      {

	        data: [86,114,106],
	        label: "Africa",
	        borderColor: "#3e95cd",
	        fill: false
	      },
	      {
	        data: [282,350,411],
	        label: "Asia",
	        borderColor: "#8e5ea2",
	        fill: false
	      },
	      {
	        data: [168,170,178],
	        label: "Europe",
	        borderColor: "#3cba9f",
	        fill: false
	      },
	      // /.AQUI SE MUESTRAN LOS DATOS DE LA BD
	    ]
	  },

	  options: {
	    title: {
	      display: true,
	      text: 'World population per region (in millions)',
	    }
	  }
	});

	// /. LINE CHART
// PIE CHART
var ctx = document.getElementById('pie').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        // SON LOS ITEMS QUE SE DESCRIBEN AL PRINCIPIO
          labels: ['Red', 'Green', 'Yellow', 'Aqua', 'Blue', 'Gray'],
         // /. SON LOS ITEMS QUE SE DESCRIBEN AL PRINCIPIO

          datasets: [{

              //AQUI SE MUESTRAN LOS DATOS DE LA BD CON SUS RESPECTIVOS COLORES
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
              '#f56954',
              '#00a65a',
              '#f39c12',
              '#00c0ef',
              '#3c8dbc',
              '#d2d6de'

              ]
              // /. AQUI SE MUESTRAN LOS DATOS DE LA BD CON SUS RESPECTIVOS COLORES
          }]
      }

  });
  // /. PIE CHART


// DOUGNHNUT CHART
  var ctx = document.getElementById('doughnut').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {

          //AQUI SE MUESTAN LOS ITEMS QUE APARECEN AL PRINCIPIO
          labels: ['Blue', 'Purple', 'Green', 'Pink', 'Red'],
          // /. AQUI SE MUESTAN LOS ITEMS QUE APARECEN AL PRINCIPIO

          datasets: [{

              //AQUI SE IMPRIMIENT LOS VALORES NUMERICOS TRAIDOS DE LA BD
              data: [12, 19, 3, 5, 2],
               // /. AQUI SE IMPRIMIENT LOS VALORES NUMERICOS TRAIDOS DE LA BD

              //COLORES QUE APARECEN EN LA GRAFICA
              backgroundColor: [
              "#3e95cd",
              "#8e5ea2",
              "#3cba9f",
              "#e8c3b9",
              "#c45850"

              ]
              // /. COLORES QUE APARECEN EN LA GRAFICA
          }]
      }

  });
  // /. DOUGNHNUT CHART


//BAR HORIZONTAL
  new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          //ITEM POR EL CUAL SE HARÁ REFERENCIA DEL DATO DE LA BD
          label: "Population (millions)",
          // /.ITEM POR EL CUAL SE HARA REFERENCIA DEL DATO DE LA BD

          // COLORES DE FONDO
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
           // /.COLORES DE FONDO

          //DATOS QUE SE MUESTRAN  DE LA BD
          data: [2478,5267,734,784,433]
          // /. DATOS QUE SE MUESTRAN DE LA BD DE LA BD
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
// /. BAR HORIZONTAL


//BAR CHART COMPEARTIVO
new Chart(document.getElementById("bar-chart-grouped"), {
    type: 'bar',
    data: {
      // ITEMS DEL EJE X
      labels: ["1900", "1950", "1999", "2050"],
      // /. ITEMS DEL EJE X
      datasets: [

        //AQUI SE IMPRIMEN LOS VALORES DE LA BD
        {
          label: "item 1",
          backgroundColor: "#3e95cd",
          data: [133,221,783,2478]
        }, {
          label: "item 2",
          backgroundColor: "#8e5ea2",
          data: [408,547,675,734]
        }
         // /. AQUI SE IMPRIMEN LOS VALORES DE LA BD

      ]
    },
    options: {
      title: {
        display: true,
        // TITULO DE LA GRAFICA
        text: 'inserte el titulo aqui'
        // /. TITULO DE LA GRAFICA
      }
    }
});
// /. BAR CHART COMPARATIVO



//BAR CHART COMPARATIVO
  var ctx = document.getElementById('Chart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',


    data: {
      // AQUI SE MUESTRAN LOS ITEMS
      labels: ["item 1", "item 2", "item 3", "item 4", "item 5", "item 6"],
       // /. AQUI SE MUESTRAN LOS ITEMS
      datasets: [

        {
          //DATO QUE REFERENCIA EL VALOR
          label: "Population (millions)",
          // /. DATO QUE REFERENCIA EL VALOR

          //COLORES DE LA GRAFICA
          backgroundColor: [ '#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
          //COLORES DE LA GRAFICA

          // DATOS NUMERICOS DE LA BD
          data: [2478,5267,734,784,433,634]
          //DATOS NUMERICOS DE LA BD

        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,

        //TITULO DEL INICIO
        text: 'INSERTE EL TITULO AQUI'
        //TIUTLO DEL INICIO

      }
    }

  });
  // /.BAR CHART COMPARATIVO



