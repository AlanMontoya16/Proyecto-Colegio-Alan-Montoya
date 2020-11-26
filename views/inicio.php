

   <!-- seccion del titulo -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Inicio</h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
           </ol>
         </div>
       </div>
     </div>
   </section>
   <!-- /. seccion del titulo -->


      <section class="content">
       <div class="container-fluid">
         <div class="row">


           <!-- TARJETAS DE COLORES -->
           <div class="col-12">
             <div class="card card-outline card-primary">
               <div class="card-header">
                 <h3 class="card-title">Tarjetas informativas</h3>

                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                     <i class="fas fa-minus"></i>
                   </button>

                 </div>
               </div>

               <div class="card-body">

                 <div class="row">
                   <div class="col-lg-3 col-6">

                     <!-- CARD INFO -->
                     <div class="small-box bg-info">
                       <div class="inner">
                         <h3>150</h3>

                         <p>New Orders</p>
                       </div>
                       <div class="icon">
                         <i class="fas fa-shopping-cart"></i>
                       </div>
                       <a href="#" class="small-box-footer">
                         More info <i class="fas fa-arrow-circle-right"></i>
                       </a>
                     </div>
                   </div>
                   <!-- /. CARD INFO -->

                   <!-- CARD SUCCESS -->
                   <div class="col-lg-3 col-6">
                     <div class="small-box bg-success">
                       <div class="inner">
                         <h3>53<sup style="font-size: 20px">%</sup></h3>

                         <p>Bounce Rate</p>
                       </div>
                       <div class="icon">
                         <i class="fas fa-shopping-cart"></i>
                       </div>
                       <a href="#" class="small-box-footer">
                         More info <i class="fas fa-arrow-circle-right"></i>
                       </a>
                     </div>
                   </div>
                   <!-- /. CARD SUCCESS -->

                   <!-- CARD WARNING -->
                   <div class="col-lg-3 col-6">
                     <div class="small-box bg-purple">
                       <div class="inner">
                         <h3>44</h3>
                         <p>User Registrations</p>
                       </div>
                       <div class="icon">
                         <i class="fas fa-user-plus"></i>
                       </div>
                       <a href="#" class="small-box-footer">
                         More info <i class="fas fa-arrow-circle-right"></i>
                       </a>
                     </div>
                   </div>
                    <!-- /. CARD WARNING -->

                   <!-- CARD DANGER -->
                   <div class="col-lg-3 col-6">
                     <div class="small-box bg-danger">
                       <div class="inner">
                         <h3>65</h3>
                         <p>Unique Visitors</p>
                       </div>
                       <div class="icon">
                         <i class="fas fa-chart-pie"></i>
                       </div>
                       <a href="#" class="small-box-footer">
                         More info <i class="fas fa-arrow-circle-right"></i>
                       </a>
                     </div>
                   </div>
                   <!-- /. CARD DANGER -->

                 </div>
               </div>

             </div>
           </div>
           <!-- TARJETAS DE COLORES -->



           <!-- GRAFICAS ESTADISTICAS -->
           <div class="col-md-6">

             <!-- LINE CHART -->
             <div class="card card-danger">
               <div class="card-header">
                 <h3 class="card-title">Line Chart</h3>

                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse">
                     <i class="fas fa-minus"></i>
                   </button>
                 </div>

               </div>
               <div class="card-body">
                 <div class="chart">
                   <!-- CONTIENE EL CODIGO DE LA GRAFICA POR ID -->
                   <canvas id="line"></canvas>
                    <!-- /. CONTIENE EL CODIGO DE LA GRAFICA POR ID -->
                 </div>
               </div>
             </div>
             <!-- /. LINE CHART -->



             <!-- PIE CHART -->
             <div class="card card-danger">
               <div class="card-header">
                 <h3 class="card-title">Pie Chart</h3>

                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse">
                     <i class="fas fa-minus"></i>
                   </button>
                 </div>
               </div>
               <div class="card-body">
                 <!-- CONTIENE EL CODIGO DE LA GRAFICA POR ID -->
                 <canvas id="pie" ></canvas>
                  <!-- /. CONTIENE EL CODIGO DE LA GRAFICA POR ID -->
               </div>
             </div>
             <!-- /. PIE CHART -->



             <!-- DOUGHNAUT CHART -->
             <div class="card card-danger">
               <div class="card-header">
                 <h3 class="card-title">Doughnut Chart</h3>

                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse">
                     <i class="fas fa-minus"></i>
                   </button>

                 </div>
               </div>
               <div class="card-body">
                 <!-- AQUI SE MUESTRA EL CODIGO DE LA GRAFICA -->
                 <canvas id="doughnut" ></canvas>
                  <!-- /. AQUI SE MUESTRA EL CODIGO DE LA GRAFICA -->
               </div>
             </div>
             <!-- /. DOUGHNAUT CHART -->

           </div>

           <div class="col-md-6">

             <!-- BAR HORIZONTAL -->
             <div class="card card-success">
               <div class="card-header">
                 <h3 class="card-title">BAR HORIZONTAL</h3>

                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse">
                     <i class="fas fa-minus"></i>
                   </button>

                 </div>
               </div>
               <div class="card-body">
                 <div class="chart">
                   <!-- AQUI SE MUESTRA EL CODIGO DE LA GRAFICA -->
                   <canvas id="bar-chart-horizontal" ></canvas>
                    <!-- /. AQUI SE MUESTRA EL CODIGO DE LA GRAFICA -->
                 </div>
               </div>
             </div>
             <!-- /. BAR HORIZONTAL -->


             <!-- BAR CHART COMPARARTIVO -->
             <div class="card card-success">
               <div class="card-header">
                 <h3 class="card-title">Bar Chart Comparativo</h3>
                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse">
                     <i class="fas fa-minus"></i>
                   </button>

                 </div>
               </div>
               <div class="card-body">
                 <div class="chart">
                   <!-- AQUI SE MUESTRAN LOS DATOS DE LA BD -->
                   <canvas id="bar-chart-grouped" ></canvas>
                   <!-- /. AQUI SE MUESTRAN LOS DATOS DE LA BD -->
                 </div>
               </div>
             </div>
             <!-- /. BAR CHART COMPARARTIVO -->


             <!-- STACKED BAR CHART -->
             <div class="card card-success">
               <div class="card-header">
                 <h3 class="card-title">Stacked Bar Chart</h3>
                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse">
                     <i class="fas fa-minus"></i>
                   </button>

                 </div>
               </div>
               <div class="card-body">
                 <div class="chart">
                   <canvas id="Chart" ></canvas>
                 </div>
               </div>
             </div>
             <!-- /: STACKED BAR CHART -->

           </div>
          <!-- GRAFICAS ESTADISTICAS -->

          <!-- CALENDARIO -->
          <div class="col-12">
           <div class="card card-outline card-warning+">
             <div class="card-header">
               <h3 class="card-title">Calendario</h3>

               <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                   <i class="fas fa-minus"></i>
                 </button>

               </div>
             </div>

             <div class="card-body">

               <div class="row">
                 <div class="col-lg-3 col-6">

                   <div id="calendar" style="width: 1100px;"></div>

               </div>
             </div>

           </div>
         </div>
         <!-- CALENDARIO -->

         </div>
       </div>
     </section>
   </div>





   <!-- FULL CALENDAR -->
   <script>


   document.addEventListener('DOMContentLoaded', function() {
       var calendarEl = document.getElementById('calendar');

       var colores = ['#f56954', '#f39c12', '#0073b7', '#00c0ef', '#00a65a', '#3c8dbc'];

       var calendar = new FullCalendar.Calendar(calendarEl, {
         timeZone: 'UTC',
         themeSystem: 'bootstrap',
         headerToolbar: {
           left: 'prev,next today',
           center: 'title',
           right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
         },
         buttonText: {
           today: 'hoy',
           month: 'mes',
           week : 'semana',
           day  : 'día',
           list: 'lista'
         },
         weekNumbers: true,
         dayMaxEvents: true,

         events: [
           // AQUI SE IMPRIMEN LOS EVENTOS
           {
             title: 'Front-End Conference',
             start: "2020-10-09 14:05:00",
             end: "2020-10-09 23:07:00",
             backgroundColor: '#f56954'
           },

             {
             title: "traer hoja de vida",
             start: "2020-10-09 14:05:00",
             end: "2020-10-09 23:07:00",
             backgroundColor: '#f39c12'
            },

             {
             title: "entrevista",
             start: "2020-10-12 19:31:00",
             end: "2020-10-12 21:31:00",
             backgroundColor: '#0073b7'
            },
           // /. AQUI SE IMPRIMEN LOS EVENTOS

       ]

       });

       calendar.render();
     });


   </script>
   <!-- /. FULL CALENDAR -->



