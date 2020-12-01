<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baju Anak</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Mini Ecommerce</a>
            <form class="form-inline" id="formItem">
                <input class="form-control mr-sm-2" type="search" placeholder="Search"  id="keyword" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchItem">Search</button>
                <a href="logout.php"><li>Logout</li></a>
            </form>
            <button class="btn btn-primary" id="cart"><i class="fas fa-shopping-cart"></i>(0)</button>
        </nav>
        <div class="row ">
            <div class="row col-md-12 mt-2"  id="listBarang" >
                
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script>
           var items = [
            ['001', 'Baju Main Anak', 200000, 'lucuk bund dibeli ya', 'img/baju1.jpg'], 
            ['002', 'Baju Jalan Anak', 128000, 'Bahan halus bund', 'img/baju2.jpg'],
            ['003', 'Baju Ultah Anak', 200000, 'Bahan halus bund', 'img/baju3.jpg'],
            ['004', 'Baju Main Anak', 330000, 'Bahan halus bund', 'img/baju4.jpg'],
            ['005', 'Baju Rumah Anak', 120000, 'Bahan halus bund', 'img/baju5.webp'], 
            ['006', 'Baju Gamis Anak', 70000, 'Bahan halus bund', 'img/baju6.webp'],
            ['007', 'Baju Ngaji Anak', 330000, 'Bahan halus bund', 'img/baju7.webp'],
            ['008', 'Baju Muslim Anak', 90000, 'Bahan halus bund', 'img/baju8.webp'],
            ['009', 'Baju Cantik Anak', 56000, 'Bahan halus bund', 'img/baju9.jpg'],
            ['009', 'Mukena Cantik Anak', 600000, 'Bahan halus bund', 'img/mukena1.webp'],
            ['009', 'Mukena Cantik Anak', 56000, 'Bahan halus bund', 'img/mukena2.webp'],
            ['009', 'Mukena Cantik Anak', 500000, 'Bahan halus bund', 'img/mukena3.jpg']
            ]

            //release 0
            var listBarang = document.getElementById("listBarang")
            function printItems(array) {
                var tampung = ""
            
                for(var i = 0; i <array.length; i++){
                tampung += `<div class = "col-4 mt-2 "
                            <div class="card " style="width: 18rem;">
                                <img src="${array[i][4]}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" id="itemName">${array[i][1]}</h5>
                                    <p class="card-text" id="itemDesc">${array[i][3]}</p>
                                    <p class="card-text">Rp. ${array[i][2]}</p>
                                    <a href="#" class="btn btn-primary" id="addCart" onclick="addCart()"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                            </div>`
                }

                listBarang.innerHTML = tampung
            }
            
            printItems(items)
   
            function filter(katakunci) {
                var filterItems = []
                for (var d = 0; d<items.length; d++){
                    var item = items[d]
                    var namaItem = item[1]
                    var isMatch = namaItem.toLowerCase().includes(katakunci.toLowerCase())
                    if(isMatch == true){
                        filterItems.push(item)
                    }
                }
                return filterItems
            }
            
            var formSearch = document.getElementById("formItem")
            formSearch.addEventListener("submit", function (event) {
                event.preventDefault();
                var keyword = document.getElementById("keyword").value

                var terfilter = filter(keyword);
                printItems(terfilter);
            })

            var inputSearch = document.getElementById("keyword");
            inputSearch.addEventListener("keyup", function (event) {
                var value = event.target.value;
                var filterDenganKeyup = filter(value);
                printItems(filterDenganKeyup);
            })

            var cartNumber = cart.value;
            function addCart() {
                var cart = document.getElementById("cart");
                cartNumber++;
                cart.innerHTML = `<i class="fas fa-shopping-cart"></i>(${cartNumber})`;
            }


      </script>
 
</body>
</html>