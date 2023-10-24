
<div class="container my-4">
    <div class="col-xl-6 m-auto ">
        @foreach ($tracking_id as $track )
        <input type="text" value="{{$track->t_number}}" name="tracking-number" id="myInput" class="form_s_field" placeholder="Your E-Mail Address" />
        <button type="submit" name="submit" onclick="myFunction()" class="btns btn-s-primary btn-s-inside uppercase">Copy</button>
        @endforeach

        <!-- end card-body-->

    </div>
    <!-- end card -->

</div>

<script>
    function myFunction() {
        // Get the text field
        var copyText = document.getElementById("myInput");

        // Select the text field 
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices.

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        // "Copied the text: " + copyText.value;
    }
</script>