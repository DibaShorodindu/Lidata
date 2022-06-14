 <!-- Bootstrap JS -->
 <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- jQuery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- Custom JS -->
    <script src="../../assets/js/script.js"></script>

    
     <!-- Search js -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
<!-- TRANSLATOR JS  -->
<script type="text/javascript"
    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
<script src="<?php echo e(asset('/')); ?>/adminAsset/assets/js/translator.js"></script>

<script type="text/javascript">
    let route_user_company = "<?php echo e(url('/autocomplete-company-search')); ?>";
    $('#searchCompany').typeahead({
        source: function (term, process) {
            return $.get(route_user_company, {
                term: term
            }, function (data) {
                return process(data);
            });
        }
    });
</script>

<script type="text/javascript">
    let route_user_people = "<?php echo e(url('/autocomplete-search')); ?>";
    $('#searchPeople').typeahead({
        source: function (query, process) {
            return $.get(route_user_people, {
                query: query
            }, function (data) {
                return process(data);
            });
        }
    });
</script>


<?php /**PATH C:\xampp\htdocs\lidata_list\resources\views/directory/includes/js.blade.php ENDPATH**/ ?>