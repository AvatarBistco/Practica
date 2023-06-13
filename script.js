// script.js
document.getElementById('calculate').addEventListener('click', function() {
  const teacher = parseFloat(document.getElementById('teacher').value);
  const course = parseFloat(document.getElementById('course').value);
  const city = parseFloat(document.getElementById('city').value);
  const intensity = parseFloat(document.getElementById('intensity').value);

  const result = teacher * course * city * intensity;
  document.getElementById('result').innerHTML = `Стоимость обучения: ${result} рублей`;
});
