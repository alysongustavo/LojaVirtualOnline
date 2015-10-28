<?php

namespace Admin\Entities;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator\ClassMethods;

/**
 * Entrega
 *
 * @ORM\Table(name="entrega", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})}, indexes={@ORM\Index(name="fk_entrega_pedido1_idx", columns={"pedido_id"})})
 * @ORM\Entity
 */
class Entrega
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=60, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="logradouro", type="string", length=100, nullable=false)
     */
    private $logradouro;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=45, nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=45, nullable=true)
     */
    private $complemento;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=45, nullable=false)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=60, nullable=false)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=2, nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=10, nullable=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=45, nullable=true)
     */
    private $pais = 'Brasil';

    /**
     * @var \Pedido
     *
     * @ORM\ManyToOne(targetEntity="Pedido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pedido_id", referencedColumnName="id")
     * })
     */
    private $pedido;
    
    public function __construct(array $data){
    	 
    	$hydrator = new ClassMethods();
    	$hydrator->hydrate($data, $this);
    	 
    }
    
    public function toArray(){
    	$hydrator = new ClassMethods();
    	return $hydrator->extract($this);
    }
    
	public function getId() {
		return $this->id;
	}
	
	public function getNome() {
		return $this->nome;
	}
	
	public function setNome($nome) {
		$this->nome = $nome;
	}
	
	public function getLogradouro() {
		return $this->logradouro;
	}
	
	public function setLogradouro($logradouro) {
		$this->logradouro = $logradouro;
	}
	
	public function getNumero() {
		return $this->numero;
	}
	
	public function setNumero($numero) {
		$this->numero = $numero;
	}
	
	public function getComplemento() {
		return $this->complemento;
	}
	
	public function setComplemento($complemento) {
		$this->complemento = $complemento;
	}
	
	public function getBairro() {
		return $this->bairro;
	}
	
	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}
	
	public function getCidade() {
		return $this->cidade;
	}
	
	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}
	
	public function getEstado() {
		return $this->estado;
	}
	
	public function setEstado($estado) {
		$this->estado = $estado;
	}
	
	public function getCep() {
		return $this->cep;
	}
	
	public function setCep($cep) {
		$this->cep = $cep;
	}
	
	public function getPais() {
		return $this->pais;
	}
	
	public function setPais($pais) {
		$this->pais = $pais;
	}
	
	public function getPedido() {
		return $this->pedido;
	}
	
	public function setPedido(\Pedido $pedido) {
		$this->pedido = $pedido;
	}
	
}

