<?php

class UserRepository{

    public function createUser($data){

        $name = $this->analysisName($data['fullname']);

        $dataCreate = [
            'username' => $data['username'],
            'email'    => isset($data['email']) ? $data['email'] : '',
            'password' => md5($data['password']),
            'date_of_birth' => date_format(date_create($data['date_of_birth']), 'Y-m-d'),
            'phone_number' => $data['phone_number'],
            'address' => $data['address']
        ];

        $dataCreate = array_merge($dataCreate, $name);

        return (new User())->create($dataCreate);
    }

    public function update(User $user){


    }

    public function analysisName($name)
    {
        $names = explode(' ', $name);

        foreach ($names as $index => $word) {
            if ($word == "") {
                unset($names[$index]);
            }
        }
        $names = array_values($names);

        $length = count($names);

        if ($length == 1) {
            return [
                'last_name'   => '',
                'middle_name' => '',
                'first_name'  => $names[0],
            ];
        }
        if ($length == 2) {
            return [
                'last_name'   => $names[0],
                'middle_name' => '',
                'first_name'  => $names[1],
            ];
        } else {
            $middle_name = '';

            for ($i = 1; $i <= $length - 3; $i++) {
                $middle_name .= $names[$i] . ' ';
            }
            $middle_name .= $names[$length - 2];

            return [
                'last_name'   => $names[0],
                'middle_name' => $middle_name,
                'first_name'  => $names[$length - 1],
            ];
        }
    }


}