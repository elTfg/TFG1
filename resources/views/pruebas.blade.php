<form>
    <label for="expiracion">Fecha de expiracion</label>
    <input type="text" name="expiracion" id="expiracion"/>



</form>
<script>
    $( function() {
        $("#expiracion").datepicker({
            format: '{{ config("app.date_format_js") }}'
        });
    });
</script>