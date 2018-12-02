<?php


    class Produtor extends CI_Controller{

        public function __construct(){
            parent:: __construct();
    
            $this->load->model('cliente_model');
            $this->cliente_model->verificar('1');
        }

        public function cadastrar(){
            $this->load->view('headerIndex');
            $this->load->view('cadastroprodutor');
            $this->load->view('footer');
        }

        public function index(){
            $this->load->model('produto_model');
            $resultado = $this->produto_model->recupera($_SESSION['idProdutor']);
            $this->load->model('cesta_model');
            $resultadoCesta = $this->cesta_model->teste();

            $this->load->view('headerDashboardProdutor');
            $this->load->view('indexDashboardProdutor', array('resultado' => $resultado, 'resultadoCesta' => $resultadoCesta));
            $this->load->view('footerDashboard');

        }

        public function cadastroProduto(){
            $this->load->view('headerDashboardProdutor');
            $this->load->view('cadastroProduto');
            $this->load->view('footerDashboard');
        }

        public function removerProduto($idProduto){
            $this->load->model('produto_model');
            if($this->produto_model->remove($idProduto)){
                $this->session->set_flashdata('mensagem', "Sucesso!");
                $this->session->set_flashdata('color', "success");
            }else{
                $this->session->set_flashdata('mensagem', "Erro!");
                $this->session->set_flashdata('color', "danger");
            }
            redirect('Produtor/');
        }
        
        public function logout(){
            session_start();
            session_destroy();
    
            redirect('Login/');
        }
    }
