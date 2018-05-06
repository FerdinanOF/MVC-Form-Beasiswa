<?php

class BeasiswaController {

    private $modelBeasiswa;
    private $uiBeasiswa;
    private $uiBeasiswa2;

    public function getForm() {
        $this->uiBeasiswa = new VisualView();
        $this->uiBeasiswa->form(); 
    }

    public function getFormHasil() {

        $this->modelBeasiswa = new BeasiswaModel();
        $data = $this->modelBeasiswa->nilai();
        $random = $this->modelBeasiswa->prodiAcak();
        $this->uiBeasiswa2 = new VisualView();
        $this->uiBeasiswa2->formHasil($data, $random);

    }

}