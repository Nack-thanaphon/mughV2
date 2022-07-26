<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class News_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $ci = get_instance();
        $ci->load->helper('menu_helper'); // call helpers fucntion
    }

    public function get_news()
    {
        $query = $this->db->select('*');
        $query = $this->db->from('tbl_news');
        $query = $this->db->order_by("create_at", 'desc');

        $query = $this->db->get();

        $result = [];

        foreach ($query->result() as $row) { //การปั้น array

            $date = DateThai($row->create_at);
            // strMonthThai;
            $result[] = array(
                "n_id" => $row->n_id,
                "n_name" => $row->n_name,
                "create_at" => $date,
                "n_image" => $row->n_image,
            );
        }


        return $result;
    }

    public function get_newest()
    {
        $this->db->order_by("n_id", "desc");
        $this->db->limit(2);
        $this->db->join('tbl_news_type', 'tbl_news.n_type = tbl_news_type.n_type_id');
        $query = $this->db->get('tbl_news');
        return $query->result();
    }


    public function get_news_bymonth()
    {
        $query = $this->db->select('create_at,n_id,CONCAT(MONTH(create_at),YEAR(create_at)) as monthyear,YEAR(create_at) as year');
        // $query = $this->db->select('*');
        $query = $this->db->from('tbl_news');
        $query = $this->db->group_by(array("monthyear"));
        $query = $this->db->order_by("create_at", "desc");
        $this->db->limit(12);

        $query = $this->db->get();
        foreach ($query->result() as $row) { //การปั้น array


            $date = Year($row->create_at);
            $Yearmonth = Yearmonth($row->create_at);
            $month = $this->get_news_bymonthlist($Yearmonth);
            // print_r($Yearmonth);

            $result[] = array(
                "n_id" => $row->n_id,
                "create_at" => $date,
                "month" => $month,
            );
        }

        return $result;
    }

    public function get_news_bymonthlist($month)
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->like('create_at', $month);

        $query = $this->db->get();

        $result = [];

        foreach ($query->result() as $row) { //การปั้น array
            $datelist = DateThai($row->create_at);

            $result[] = array(
                "id" => $row->n_id,
                "datelist" => $datelist,
            );
        }
        return $result;
    }



    public function get_news_single($id)
    {

        $this->db->select('*')
            ->from('tbl_news')
            ->join('tbl_news_type', 'tbl_news.n_type = tbl_news_type.n_type_id')
            ->where('n_id =', $id);

        $query = $this->db->get();
        $data = $query->result();

        $result = [];
        foreach ($data as $row) {

            $date = Datethai($row->create_at);

            $result[] = array(
                "n_id" => $row->n_id,
                "n_name" => $row->n_name,
                "n_detail" => $row->n_detail,
                "n_type" => $row->n_type,
                "n_date" => $date,
                "n_views" => $row->n_views,
                "n_image" => $row->n_image,
            );
        }
        return  $result;
    }


    public function counter()
    {
        $id = $this->input->post('id');
        $this->db->set('n_views', '`n_views`+ 1', FALSE);
        $this->db->where('n_id', $id);
        $this->db->update('tbl_news');
    }
}
