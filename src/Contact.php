<?php
    class Contact
    {
        private $name;
        private $phone;
        private $city;
        private $state;
        private $zip;

        function __construct($contact_name, $contact_phone, $contact_city, $contact_state, $contact_zip)
        {
            $this->name = $contact_name;
            $this->phone = $contact_phone;
            $this->city = $contact_city;
            $this->city = $contact_state;
            $this->city = $contact_zip;
        }

    // Getters, Setters
        // Name
        function getName()
        {
            return $this->name;
        }

        function setName()
        {
            $this->name = (string) $new_contact;
        }

        //Phone
        function getPhone()
        {
            return $this->phone;
        }

        function setPhone()
        {
            $this->phone = (string) $new_phone;
        }

        // City
        function getCity()
        {
            return $this->city;
        }

        function setCity()
        {
            $this->City = (string) $new_city;
        }

        // State
        function getState()
        {
            return $this->state;
        }

        function setState()
        {
            $this->state = (string) $new_state;
        }

    // SAVE, getAll(), deleteAll()
        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }

    }
?>
