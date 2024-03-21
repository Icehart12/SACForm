<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSWD FORM</title>
    @include('sweetalert::alert')
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<!-- Adjust header & Images -->
<style> 
    
    .Header{ 
        border: 3px solid rgb(122, 122, 122);
        border-radius:10px ;
        font-size: 50px;
        padding: 5px;
        display: inline-block; 
        margin: -5em
    }
    .Header2{
        background-color: rgb(122, 122, 122);
        dislay: inline-block;
        color: white;
    }
    img{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    
</style>
<body>
<fieldset>
    
    <div style="" , align="center">
        <img src="{{ asset('images/DSwd_Logo.png') }}" width="300" height="200"/> <!-- Images -->
        <h1 class="Header">Social Amelioration Card (SAC)</h1> 
        <h2 class="Header2">Information</h2>
        @if ($errors->any())
            <div class="alert text-danger border border-danger">
                <strong>Error!</strong><br />
                <ul>
                    @foreach ($errors->all() as $key => $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        
        <form action="{{ route('register') }}" method="POST">
            @csrf
            @method('post')


            <input name="name" type="text" placeholder="Name" required value="">
            <select class="" name="gender" required> <!-- Gender -->
                <option value="" selected hidden>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <input name="age" type="number" placeholder="Age" required value="">
            <input name="address" type="text" placeholder="Address" required value="">
            <select class="" name="district" required> <!-- District list -->
                <option value="" selected hidden>Selec District</option>
                <option value="District 1">District 1</option>
                <option value="District 2">District 2</option>
                <option value="District 3">District 3</option>
                <option value="District 4">District 4</option>
            </select><br></br>
            <input name="id_person" type="text" placeholder="ID person" required value="">
            <select class="", name="city" required> <!-- City -->
                <option value="" selected hidden>City</option>
                <option value="Caloocan City">Caloocan City</option>
                <option value="Las Piñas City">Las Piñas City</option>
                <option value="Makati City">Makati City</option>
                <option value="Malabon City">Malabon City</option>
                <option value="Mandaluyong City">Mandaluyong City</option>
                <option value="Manila City">Manila City</option>
                <option value="Marikina City">Marikina City</option>
                <option value="Muntinlupa City">Muntinlupa City</option>
                <option value="Navotas City">Navotas City</option>
                <option value="Parañaque City">Parañaque City</option>
                <option value="Pasay City">Pasay City</option>
                <option value="Pasig City">Pasig City</option>
                <option value="Quezon City">Quezon City</option>
                <option value="San Juan City">San Juan City</option>
                <option value="Taguig City">Taguig City</option>
                <option value="Valenzuela City">Valenzuela City</option>
            </select>
            <input name="number_id" type="number" placeholder="Number ID"   required value="">
            <input name="province" type="text" placeholder="Province" required value="">
            <select class="" name="religion" required> <!-- Religion -->
                <option value="" selected hidden>Religion</option>
                <option value="Catholic">Catholic</option>
                <option value="Muslim">Muslim</option>
                <option value="Inglesia ni Cristo">Inglesia ni Cristo</option>
            </select><br></br>

            <label for="date_of_birth">Date of Birth:</label>
            <input name="date_of_birth" type="date" class="form-control">
            <input name="work" type="text" placeholder="Work" required value="">
            <input name="monthly_salary" type="number" placeholder="Monthly Salary" required value="">
            <input name="cellphone_no" type="number" placeholder="Contact No."  required value="">
            <input name="work_location" type="text" placeholder="Work of Location." required value="">
            <input name="section_department" type="text" placeholder="Section Department" required value="">
            <input name="condition_of_health" type="text" placeholder="Condition of Health" required value="">
            <br></br>
            <div>
                <input name="benepisyaryo_ng_UCT" type="checkbox" option value="Benepisyaryo ng UCT">Benepisyaryo ng UCT</option>
                <input name="benepisyaro_ng_4Ps" type="checkbox" option value="Benepisyaro ng 4Ps">Benepisyaro ng 4Ps</option>
                <input name="Katutubo_(Grupo)" type="checkbox" option value="Katutubo/Grupo">Katutubo/Grupo</option>
                <input name="Others" type="checkbox" option value="Others">Others</option>
                <br></br>
              
            </div>

            <div>  
                <style>
                    table, td, th {  
                      border: 1px solid #ddd;
                      text-align: center;
                      font-family: Arial, Helvetica, sans-serif;
                    }
                    
                    table {
                      border-collapse: collapse;
                      width: 50%;
                    }
                    
                    th, td {
                      padding: 15px;
                    }
                </style>
            <table>
                <tr>
                    <th>Miyembro ng Pamilya(Apelyido,Pangalan,Gitnang Pangalan)</th>
                    <th>Relasyon sa puno ng pamilya</th>
                    <th>Petsa ng Kapanganakan<br>(MM/DD/YYYY)</br></th>
                    <th>Kasarian<br>(M/F)</br></th>
                    <th>Trabaho</th>
                    <th>Sektor<br>(A-F)</br></th>
                    <th>Kondisyon ng Kalusugan (1-5)</th>
                </tr>
                
                <tr> <td></td><td></td><td></td><td></td><td></td><td></td><td></td> </tr>
                <tr> <td></td><td></td><td></td><td></td><td></td><td></td><td></td> </tr>
                <tr> <td></td><td></td><td></td><td></td><td></td><td></td><td></td> </tr>
                <tr> <td></td><td></td><td></td><td></td><td></td><td></td><td></td> </tr>
                <tr> <td></td><td></td><td></td><td></td><td></td><td></td><td></td> </tr>
                <tr> <td></td><td></td><td></td><td></td><td></td><td></td><td></td> </tr>
                <tr> <td></td><td></td><td></td><td></td><td></td><td></td><td></td> </tr>
            </table>
            <p align='block'>Paalala: Ang unang dalawang miyembro na nakalista ay magsisilbing alternatibong kinatawan ng inyong pamilya</p>



                <button input type="submit">Register</button>
        
            </div>
              

            


           



            
        </form>
    
        
    </div>

</fieldset> 
</body>

</html>
