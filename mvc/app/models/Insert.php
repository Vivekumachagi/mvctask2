<?php

class Insert extends Database
{
    public function insrt($img)
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $pincode = $_POST['pincode'];
        $image = $img;
        $this->query("insert into empdetail (fname, lname, email, phone, street, city, state, country, pincode, photo) values('$fname','$lname','$email', '$phone','$street','$city','$state', '$country','$pincode','$image')");
        return $this->execute();
    }

    public function update($data,$pic)
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $pincode = $_POST['pincode'];
        $photo = $pic;
        $this->query("UPDATE empdetail
        SET fname='$fname', lname='$lname', email='$email', phone='$phone', street='$street', city='$city', state='$state', country='$country', pincode='$pincode',photo ='$photo'
        WHERE id = '$data->id'");
        $_POST = null;
        return $this->execute();
        
    }

    public function delete($id)
    {
        $this->query(" DELETE FROM empdetail WHERE id = '$id'");
        return $this->execute();
    }
}
