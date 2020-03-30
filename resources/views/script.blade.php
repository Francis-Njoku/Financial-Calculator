<p>Click the button to display the number of years between a specified date and January 1, 1970.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var d = Date.parse("March 21, 2012");
    var minutes = 1000 * 60;
    var hours = minutes * 60;
    var days = hours * 24;
    var years = days * 365;
    var y = Math.round(d / years);

    document.getElementById("demo").innerHTML = y;
}
</script>




<p>Click the button to display the numbers of milliseconds between a specified date and midnight January 1, 1970.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var d = Date.UTC(2012, 02, 30);
    document.getElementById("demo").innerHTML = d;
}
</script>



<p>The internal clock in JavaScript starts at midnight January 1, 1970.</p>
<p>Click the button to display the number of milliseconds since midnight, January 1, 1970.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var n = Date.now();
    document.getElementById("demo").innerHTML = n;
}
</script>






<p>Click the button to display the day of the week, according to UTC.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var d = new Date();
    var n = d.getUTCDay();
    document.getElementById("demo").innerHTML = n;
}
</script>

<p><strong>Note:</strong> 0=Sunday, 1=Monday, etc.</p>