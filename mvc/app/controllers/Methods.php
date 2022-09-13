<?php
session_start();
class Methods extends Controller
{
    public function getdata()
    {
        $models = $this->model('get');
        $values = $models->getdata();
        $data = ['posts' => $values];
        return $data;
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        // $this->view('pages/index', $this->getdata());
        $locatation = URLROOT . 'pages/index';
        header('location: ' . $locatation);
        exit;
    }

    public function login()
    {
        error_reporting(E_ERROR | E_PARSE);

        if (isset($_SESSION['name'])) {
            $locatation = URLROOT . 'pages/logged';
            header('location: ' . $locatation);
            exit();
        } else {
            if (isset($_POST['cancel'])) {
                $this->view('pages/index', $this->getdata());
            }
            if (isset($_POST['signup'])) {
                $name = $_POST['email'];
                $password = $_POST['password'];
                $verifyPassword = false;
                $verifyPassword = password_verify($password, USER_PASS);
                if (USER_EMAIL == $name && $verifyPassword == true) {
                    $_SESSION['name'] = $name;
                    $this->view('pages/logged', $this->getdata());
                } else {
                    session_start();
                    $_SESSION['incorrect'] = 'invalid user detail';
                    $this->view('pages/index', $this->getdata());
                    exit();
                }
            }
        }
    }
    public function guestSearch()
    {
        $models = $this->model('get');
        $data = $models->getone();
        if ($data) {
            $data = ["posts" => $data];
            $this->view('pages/viewone', $data);
        } else {
            session_start();
            $_SESSION['error'] = 'user not found';
            $this->view('pages/index', $this->getdata());
            exit();
        }
    }

    public function search()
    {
        if (isset($_SESSION['name'])) {
            $models = $this->model('get');
            $data = $models->getone();
            if ($data) {
                $data = ["posts" => $data];
                $this->view('pages/viewone', $data);
            } else {
                session_start();
                $_SESSION['error'] = 'user not found';
                $this->view('pages/logged', $this->getdata());
            }
        } else {
            session_start();
            $_SESSION['error'] = 'user not found';
            $locatation = URLROOT . 'pages/index';
            header('location: ' . $locatation);
            exit;
        }
    }
    public function delete($id)
    {
        if (isset($_SESSION['name'])) {
            $models = $this->model('Insert');
            $models->delete($id);
            $this->view('pages/logged', $this->getdata());
        } else {
            $this->view('pages/index', $this->getdata());
            exit();
        }
    }

    public function edit($value)
    {
        if (isset($_SESSION['name'])) {
            $models = $this->model('get');
            $data = $models->getid($value);
            if ($data) {
                if (isset($_POST['edit'])) {
                    $target_dir = "../public/img/";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                    $models = $this->model('Insert');
                    $models->update($data, $target_file);
                    $this->view('pages/logged', $this->getdata());
                } else {
                    $this->view('pages/edit', $data);
                }
            } else {
                $this->view('pages/logged', $this->getdata());
            }
        } else {
            $this->view('pages/index', $this->getdata());
            exit();
        }
    }
    public function export()
    {
        error_reporting(E_ERROR | E_PARSE);
        $exp = $this->model('get');
        $result = $exp->getdata();
        $filename = "udetail_.csv";
        $file = fopen('php://output', 'w');
        $head = array("id", "fname", "lname", "email", "phone", "street", "city", "state", "country", "pincode", "photo");
        fputcsv($file, $head);
        foreach ($result as $row) {
            $image =  $row->photo;
            $str = "http://localhost/mvc/" . ltrim($image, '..');
            $lineData = array($row->id, $row->fname, $row->lname, $row->email, $row->phone, $row->street, $row->city, $row->state, $row->country, $row->pincode, $str);
            fputcsv($file, $lineData);
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=\"$filename\"");
            header('Content-type: application/csv');
        }
        fclose(($file));
        exit;
    }

    public function addUser()
    {
        if (isset($_SESSION['name'])) {
            $this->view('pages/signup');
        } else {
            $this->view('pages/index', $this->getdata());
            exit();
        }
    }

    public function insert()
    {

        if (isset($_POST)) {
            if ($_POST == null) {
                $this->view('pages/logged', $this->getdata());
                exit();
            } else {
                $target_dir = "../public/img/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                $models = $this->model('Insert');
                $exp = $this->model('get');
                $val = $_POST['email'];
                $result = $exp->getemail($val);
                if (!$result) {
                    $models->insrt($target_file);
                    $this->view('pages/logged', $this->getdata());
                } else {
                    session_start();
                    $_SESSION['emailExist'] = 'email already exists';
                    $this->view('pages/signup');
                }
            }
        } else {
            $this->view('pages/logged', $this->getdata());
            exit();
        }
    }
}
