<!doctype html>

<html>
<head>
    <meta charset="UTF-8">
    <title>A区座位图</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/responsive.css"/>
    <link rel="stylesheet" href="assets/css/seat-area.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.seat-charts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/seat-chart-style.css">
</head>

<body>
<div class="container">
    <div class="row text-center"><h2>A 区</h2></div>
    <div class="row text-center">
        <div id="seat-map"></div>
    </div>
    <div class="row text-center bg-info buy"><a href="seat-area.html">选完了</a></div>
</div>

<script src="assets/js/jQuery-2.1.4.min.js"></script>
<script src="assets/js/jquery.seat-charts.js"></script>

<script>
    var firstSeatLabel = 1;

    $(document).ready(function() {
        var $cart = $('#selected-seats'),
            $counter = $('#counter'),
            $total = $('#total'),
            sc = $('#seat-map').seatCharts({
                map: [
                    'aaaaa',
                    'aaaaa',
                    'aaaaa',
                    'aaaaa',
                    'aaaaa',
                ],
                seats: {
                    a: {
                        price   : 150,
                        classes : 'a-class', //your custom CSS class
                        category: 'A Class'
                    },
//                    b: {
//                        price   : 100,
//                        classes : 'b-class', //your custom CSS class
//                        category: 'B Class'
//                    },
//                    c: {
//                        price   : 100,
//                        classes : 'c-class', //your custom CSS class
//                        category: 'C Class'
//                    },
//                    d: {
//                        price   : 100,
//                        classes : 'd-class', //your custom CSS class
//                        category: 'D Class'
//                    },
//                    f: {
//                        price   : 100,
//                        classes : 'first-class', //your custom CSS class
//                        category: 'First Class'
//                    },
//                    e: {
//                        price   : 40,
//                        classes : 'economy-class', //your custom CSS class
//                        category: 'Economy Class'
//                    }

                },
                naming : {
                    top : false,
                    getId  : function(character, row, column) {
                        return character + row + column;
                    },
                    getLabel : function (character, row, column) {
//                        return firstSeatLabel++;
                        return character.toUpperCase() + row + column;
                    },
                },
                legend : {
                    node : $('#legend'),
                    items : [
                        [ 'f', 'available',   'First Class' ],
                        [ 'e', 'available',   'Economy Class'],
                        [ 'f', 'unavailable', 'Already Booked']
                    ]
                },
                click: function () {
                    if (this.status() == 'available') {
                        //let's create a new <li> which we'll add to the cart items
                        $('<li>'+this.data().category+' Seat # '+this.settings.label+': <b>$'+this.data().price+'</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
                            .attr('id', 'cart-item-'+this.settings.id)
                            .data('seatId', this.settings.id)
                            .appendTo($cart);

                        /*
                         * Lets update the counter and total
                         *
                         * .find function will not find the current seat, because it will change its stauts only after return
                         * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
                         */
                        $counter.text(sc.find('selected').length+1);
                        $total.text(recalculateTotal(sc)+this.data().price);

                        return 'selected';
                    } else if (this.status() == 'selected') {
                        //update the counter
                        $counter.text(sc.find('selected').length-1);
                        //and total
                        $total.text(recalculateTotal(sc)-this.data().price);

                        //remove the item from our cart
                        $('#cart-item-'+this.settings.id).remove();

                        //seat has been vacated
                        return 'available';
                    } else if (this.status() == 'unavailable') {
                        //seat has been already booked
                        return 'unavailable';
                    } else {
                        return this.style();
                    }
                }
            });

        //this will handle "[cancel]" link clicks
        $('#selected-seats').on('click', '.cancel-cart-item', function () {
            //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
            sc.get($(this).parents('li:first').data('seatId')).click();
        });

        //let's pretend some seats have already been booked
//        sc.get(['1_2', '4_1', '7_1', '7_2']).status('unavailable');

    });

    function recalculateTotal(sc) {
        var total = 0;

        //basically find every selected seat and sum its price
        sc.find('selected').each(function () {
            total += this.data().price;
        });

        return total;
    }

</script>
</body>
</html>

