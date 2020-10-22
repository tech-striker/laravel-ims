
    $(document).ready(function() {
        var token = $('meta[name="csrf-token"]').attr('content');
        var value = '';
        var val_lft = '';
        $('select').on('change', function() {
            value = $(this).val();
        });

        $('#multiselect_rightSelected').click(function(params) {
            $.ajax({
                type: "POST",
                cache: false,
                url: 'index.php/shift',
                data: {
                    'name': value,
                    'column': '2',
                    "_token": token
                },
                dataType: 'json',
                success: function(result) {
                    console.log(typeof result.success);
                    if (result.success == '1') {
                        $('#multiselect_to').append($("<option></option>").attr("value", value).text(value));
                        $("#multiselect option[value=" + value + "]").remove();
                    }
                }
            });
        });


        $('select#multiselect_to').on('change', function() {
            val_lft = $(this).val();
        });

        $('#multiselect_leftSelected').click(function(params) {
            $.ajax({
                type: "POST",
                cache: false,
                url: 'index.php/shift',
                data: {
                    'name': val_lft,
                    'column': '1',
                    "_token": token
                },
                dataType: 'json',
                success: function(result) {
                    console.log(typeof result.success);
                    if (result.success == '1') {
                        $('#multiselect').append($("<option></option>").attr("value", value).text(value));
                        $("#multiselect_to option[value=" + val_lft + "]").remove();
                    }
                }
            });
        });

        $('#add').click(function(e) {
            e.preventDefault();
            var val = $('#name').val();
            $.ajax({
                type: "POST",
                cache: false,
                url: 'index.php/add-name',
                data: {
                    'name': val,
                    'column': 1,
                    "_token": token
                },
                dataType: 'json',
                success: function(result) {
                    console.log(typeof result.success);
                    if (result.success == '1') {
                        $('#multiselect').append($("<option></option>").attr("value", val).text(val));
                    }
                }
            });
        })

    });