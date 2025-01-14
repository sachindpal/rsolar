AOS.init({
  duration: 1200,
});




$(".resultbtn").click(function(){
  $(".blur1").removeClass("blur");
});

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});


window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
        // text: "Daily Email Analysis"
    },
    axisX: {
        valueFormatString: "DDD",
        minimum: new Date(2017, 1, 5, 23),
        maximum: new Date(2017, 1, 12, 1)
    },
    axisY: {
        // title: "Number of Messages"
    },
    legend: {
        verticalAlign: "top",
        horizontalAlign: "right",
        dockInsidePlotArea: true
    },
    toolTip: {
        shared: true
    },
    data: [{
        name: "Received",
        showInLegend: true,
        legendMarkerType: "square",
        type: "area",
        color: "rgba(40,175,101,0.6)",
        markerSize: 0,
        dataPoints: [
            { x: new Date(2017, 1, 6), y: 220 },
            { x: new Date(2017, 1, 7), y: 120 },
            { x: new Date(2017, 1, 8), y: 144 },
            { x: new Date(2017, 1, 9), y: 162 },
            { x: new Date(2017, 1, 10), y: 129 },
            { x: new Date(2017, 1, 11), y: 109 },
            { x: new Date(2017, 1, 12), y: 129 }
        ]
    },
    {
        name: "Sent",
        showInLegend: true,
        legendMarkerType: "square",
        type: "area",
        color: "rgba(0,75,141,0.7)",
        markerSize: 0,
        dataPoints: [
            { x: new Date(2017, 1, 6), y: 42 },
            { x: new Date(2017, 1, 7), y: 34 },
            { x: new Date(2017, 1, 8), y: 29 },
            { x: new Date(2017, 1, 9), y: 42 },
            { x: new Date(2017, 1, 10), y: 53},
            { x: new Date(2017, 1, 11), y: 15 },
            { x: new Date(2017, 1, 12), y: 12 }
        ]
    }]
});
chart.render();

}



     const rangeSlider = document.getElementById('rangeSlider');
        const rangeOutput = document.getElementById('rangeOutput');
        const inputContainer = document.getElementById('inputContainer');

        rangeSlider.addEventListener('input', () => {
            const value = parseInt(rangeSlider.value, 10);
            const step = parseInt(rangeSlider.step, 10);
            const max = parseInt(rangeSlider.max, 10);

            if (value === max) {
                rangeOutput.textContent = `${value}+`; // Display "10000+"
                
                // Create and append the text field if it doesn't already exist
                if (!document.getElementById('textField')) {
                    const textField = document.createElement('input');
                    textField.type = 'text';
                    textField.id = 'textField';
                    textField.name = 'monthly_bill_exact';
                    textField.placeholder = 'Your average electricity bill amount (₹)';
                    inputContainer.appendChild(textField);
                }
            } else {
                const nextValue = value + step;
                rangeOutput.textContent = `${value}-${nextValue}`;
                
                // Remove the text field if it exists
                const existingTextField = document.getElementById('textField');
                if (existingTextField) {
                    inputContainer.removeChild(existingTextField);
                }
            }
        });
    