<script>
window.onload = function() {
    var canvasBar = document.getElementById('barChart');
    var esMobile = window.innerWidth <= 768;

    if (canvasBar && esMobile) {
        var ctxBar = canvasBar.getContext('2d');

        var barChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ['Informática', 'Informática', 'Informática', 'Informática', 'Informática', 'Informática'],
                datasets: [{
                    label: 'Talleres',
                    data: [20, 38, 27, 50, 13, 55],
                    backgroundColor: '#1E90FF',
                    borderColor: '#4682B4',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
};
</script>