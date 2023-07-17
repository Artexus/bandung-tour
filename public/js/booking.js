var mapping = {}
var mappingTickets = {}
var indexTicket

$(document).ready(function() {
    $('#search-bar').on('input', function() {
        var query = $(this).val();
        if (query == "") {
            var searchResults = $('#search-res');
            searchResults.hide()
            return
        }
        $.ajax({
            url:"/api/search",
            type:"GET",
            data:{'name':query},
            success: function(res) {
                mapping = {};
                // Handle the search results
                var searchResults = $('#search-res');
                searchResults.show();
                searchResults.empty();

                if (res.length > 0) {
                    res.forEach(function(result) {
                        var item = $('<div class="search-bar-res">').text(result.location_name).attr("id", result.id);
                        searchResults.append(item);
                        mapping[result.id] = result;
                    });
                } else {
                    var noResults = $('<p>').text('No results found.');
                    searchResults.append(noResults);
                }
            }
        })
    })


    $('#search-res').on('click', '.search-bar-res', function(event){
        clickedElement = $(event.target);
        clickedElementID = clickedElement.attr('id');

        $('#location-name').text(mapping[clickedElementID].location_name)
        $('#description').text(mapping[clickedElementID].description)
        $('#image').attr("src", mapping[clickedElementID].path)

        let tickets = mapping[clickedElementID].tickets
        $('#ticket-select').empty();

        $('#ticket-select').append($('<option hidden>').text("Tipe tiket"))

        tickets.forEach(function(ticket) {
            mappingTickets[ticket.id] = ticket
            var item = $("<option>").text(ticket.name.charAt(0).toUpperCase() + ticket.name.slice(1)).attr("value", ticket.id)
            $('#ticket-select').append(item)
        })

        $('#container-booking').show();

        $('#search-res').hide();
    })

    $('#ticket-select').change(function() {
        indexTicket = $(this).val()

        $('#price-total').text(mappingTickets[indexTicket].price)
        $('#detail').show();
    })


    $('#ticket-quantity').on('input', function() {
        $('#price-total').text(mappingTickets[indexTicket].price * $(this).val())
        $('#detail').show();
    })

})
