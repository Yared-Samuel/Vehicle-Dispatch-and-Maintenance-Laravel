<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl  sm:px-6 lg:px-8">
            <div class="shadow-lg rounded-lg overflow-hidden">
                <div class="py-3 px-5 bg-gray-50">Line chart</div>
                <canvas class="p-10" id="chartLine"></canvas>
              </div>
              
              <!-- Required chart.js -->
              {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
              <script src="{{ asset('assets/js/chart.js') }}"></script>
              
              <!-- Chart line -->
              <script>
                const labels = ["January", "February", "March", "April", "May", "June"];
                const data = {
                  labels: labels,
                  datasets: [
                    {
                      label: "My First dataset",
                      backgroundColor: "hsl(252, 82.9%, 67.8%)",
                      borderColor: "hsl(252, 82.9%, 67.8%)",
                      data: [0, 10, 5, 2, 20, 30, 45],
                    },
                  ],
                };
              
                const configLineChart = {
                  type: "line",
                  data,
                  options: {},
                };
              
                var chartLine = new Chart(
                  document.getElementById("chartLine"),
                  configLineChart
                );
              </script>
            </div>
        </div>
    </div>
</x-admin-layout>