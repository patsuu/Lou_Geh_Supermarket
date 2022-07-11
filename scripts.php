<script>
  function lettersOnly(input) {
    var regex = /[^a-z]/gi
    input.value = input.value.replace (regex,"")
  }
</script>

<script>
  function charnumbersOnly(input) {
    var regex = /[^0-9,.]/gi
    input.value = input.value.replace (regex,"")
  }
</script>
<script>
  function numbersOnly(input) {
    var regex = /[^0-9]/gi
    input.value = input.value.replace (regex,"")
  }
</script>