@extends('adminlte::page')

@section('about')
    <x-adminlte-modal id="modalCustom" title="Info su .." size="lg" theme="teal"
    icon="fas fa-info" v-centered static-backdrop scrollable>
    <div>
        <p>L’obiettivo del gestionale è quello di integrare alle attività di laboratorio, la parte amministrativa e della qualità. Tali attività, spesso non ben integrate nei gestionali,  richiedono un grande dispendio in termini di tempo e di risorse umane soprattutto nei piccoli e medi laboratori.</p>
        <p>Da questi obiettivi nasce <strong>CARTESIO®</strong></p>
        <p><strong>CARTESIO®</strong> è un sistema informativo interamente progettato in laboratorio con l’intento di ottimizzare tutti i processi produttivi di un laboratorio chimico-microbiologico in conformità alla norma <strong>UNI CEI EN ISO/IEC 17025</strong>.</p>
        <p><strong>CARTESIO®</strong> sfrutta i suggerimenti dei laboratori cui è installato recependo in continuo le necessità e mettendole subito a disposizione. Anticipa gli orientamenti dell’ente accreditante ponendo in essere, in brevissimo tempo, le prescrizioni agli altri laboratori sottoposti ad audit.</p>
        <p><strong>CARTESIO®</strong> copre nei suoi processi i punti della norma <strong>UNI CEI EN ISO/IEC 17025</strong> come dettagliata dalla RT08</p>            
    </div>
    <x-slot name="footerSlot">
        <x-adminlte-button theme="success" label="Chiudi" data-dismiss="modal"/>
    </x-slot>
    </x-adminlte-modal>
@stop

@section('footer')
    <div class="d-flex justify-content-between">
        <div class="flex-grow-1">
            Copyright © 2022 <strong>Cartesio</strong>. All rights reserved.
        </div>
        <div>
            <strong>Version</strong> 0.0.0
        </div>
    </div>
@stop