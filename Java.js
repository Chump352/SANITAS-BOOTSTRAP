window.onload=preparePage();

function preparePage(){


  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          datasets: [{
              label: '# of Votes',
              data: [10, 5, 5],
              backgroundColor: [
                  'rgb(78,115,223)',
                  'rgb(28,200,138)',
                  'rgb(54,185,204)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
        responsive: false

      }
  });

}


