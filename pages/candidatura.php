<?php

class Candidatura{
    private $id;
    private $data;
    private $datacontratacao;
    private $dataentrevista;
    private $dataencerramento;
    private $requisitos;
    private $feedback;
    private $beneficios;
    private $salario;
    private $tipolocalidade;
    private $experiencia;
    private $titulacao;
    private $disponibilidade;

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getData() {
		return $this->data;
	}
	
	/**
	 * @param mixed $data 
	 * @return self
	 */
	public function setData($data): self {
		$this->data = $data;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDatacontratacao() {
		return $this->datacontratacao;
	}
	
	/**
	 * @param mixed $datacontratacao 
	 * @return self
	 */
	public function setDatacontratacao($datacontratacao): self {
		$this->datacontratacao = $datacontratacao;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDataentrevista() {
		return $this->dataentrevista;
	}
	
	/**
	 * @param mixed $dataentrevista 
	 * @return self
	 */
	public function setDataentrevista($dataentrevista): self {
		$this->dataentrevista = $dataentrevista;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDataencerramento() {
		return $this->dataencerramento;
	}
	
	/**
	 * @param mixed $dataencerramento 
	 * @return self
	 */
	public function setDataencerramento($dataencerramento): self {
		$this->dataencerramento = $dataencerramento;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getRequisitos() {
		return $this->requisitos;
	}
	
	/**
	 * @param mixed $requisitos 
	 * @return self
	 */
	public function setRequisitos($requisitos): self {
		$this->requisitos = $requisitos;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getFeedback() {
		return $this->feedback;
	}
	
	/**
	 * @param mixed $feedback 
	 * @return self
	 */
	public function setFeedback($feedback): self {
		$this->feedback = $feedback;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getBeneficios() {
		return $this->beneficios;
	}
	
	/**
	 * @param mixed $beneficios 
	 * @return self
	 */
	public function setBeneficios($beneficios): self {
		$this->beneficios = $beneficios;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getSalario() {
		return $this->salario;
	}
	
	/**
	 * @param mixed $salario 
	 * @return self
	 */
	public function setSalario($salario): self {
		$this->salario = $salario;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTipolocalidade() {
		return $this->tipolocalidade;
	}
	
	/**
	 * @param mixed $tipolocalidade 
	 * @return self
	 */
	public function setTipolocalidade($tipolocalidade): self {
		$this->tipolocalidade = $tipolocalidade;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getExperiencia() {
		return $this->experiencia;
	}
	
	/**
	 * @param mixed $experiencia 
	 * @return self
	 */
	public function setExperiencia($experiencia): self {
		$this->experiencia = $experiencia;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTitulacao() {
		return $this->titulacao;
	}
	
	/**
	 * @param mixed $titulacao 
	 * @return self
	 */
	public function setTitulacao($titulacao): self {
		$this->titulacao = $titulacao;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDisponibilidade() {
		return $this->disponibilidade;
	}
	
	/**
	 * @param mixed $disponibilidade 
	 * @return self
	 */
	public function setDisponibilidade($disponibilidade): self {
		$this->disponibilidade = $disponibilidade;
		return $this;
	}
}