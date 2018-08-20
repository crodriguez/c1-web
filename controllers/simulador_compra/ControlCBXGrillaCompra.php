<?php

/**
 * CONTROLADOR de ALMACENAMIENTO CREACION DE REGISTROS
 * Descripción: 
 * Fecha: 2018-05-09
 * @author ROBERTO PÈREZ
 */

namespace simulador_compra;

class ControlCBXGrillaCompra extends \Control {

    // Llenar Tabla2
    public function llenar_tabla2($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::llenar_tabla2($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')), JSON_UNESCAPED_UNICODE);
    }

    public function llenar_tabla_depto($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::llenar_tabla_depto($f3->get('SESSION.COD_TEMPORADA')));
    }

    public function llenar_tabla_oc($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::llenar_tabla_oc($f3->get('SESSION.COD_TEMPORADA')));
    }

    // Llenar Tabla2
    public function llenar_parte2_tabla1($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_consumo($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsLinea
    public function listar_optionsLinea($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsLinea($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsSubLinea
    public function listar_optionsSubLinea($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsSubLinea($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('GET.ID_LINEA')));
    }

    // Listar CBX optionsMarca
    public function listar_optionsMarca($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsMarca($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsEVida
    public function listar_optionsEVida($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsEVida($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsOcacionUso
    public function listar_optionsOcacionUso($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsOcacionUso($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsPiramideMix
    public function listar_optionsPiramideMix($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsPiramideMix($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsVentanaLlegada
    public function listar_optionsVentanaLlegada($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsVentanaLlegada($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsRankVenta
    public function listar_optionsRankVenta($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsRankVenta($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsLifeCicle
    public function listar_optionsLifeCicle($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsLifeCicle($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsColor
    public function listar_optionsColor($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsColor($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    // Listar CBX optionsTipoProducto
    public function listar_optionsTipoProducto($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsTipoProducto($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsTipoExhibicion
    public function listar_optionsTipoExhibicion($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsTipoExhibicion($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsCluster
    public function listar_optionsCluster($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsCluster($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsFormato
    public function listar_optionsFormato($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsFormato($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsProced
    public function listar_optionsProced($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsProced($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsVia
    public function listar_optionsVia($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsVia($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsPais
    public function listar_optionsPais($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsPais($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsMoneda
    public function listar_optionsMoneda($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsMoneda($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsRazonSocial
    public function listar_optionsRazonSocial($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsRazonSocial($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsTrader
    public function listar_optionsTrader($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsTrader($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsEstadoOpcion
    public function listar_optionsEstadoOpcion($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsEstadoOpcion($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // Listar CBX optionsProveedor
    public function listar_optionsProveedor($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_optionsProveedor($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO')));
    }

    // guarda_solo_proforma
    public function guarda_solo_proforma($f3) {
        echo \simulador_compra\cbx_grilla_compra::guarda_solo_proforma($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.PROFORMA'),$f3->get('GET.ID_INSERTAR'));
    }

    // Actualiza Historial
    public function actualiza_historial($f3) {
        echo \simulador_compra\cbx_grilla_compra::actualiza_historial($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.PROFORMA'),$f3->get('GET.ID_INSERTAR'));
    }

    // Se actualiza estado Opcion segun estado OC PMM
    public function actualiza_estado_oc_segun_ocpmm($f3) {
        echo \simulador_compra\cbx_grilla_compra::actualiza_estado_oc_segun_ocpmm($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.PI'),$f3->get('GET.ID_COLOR3'),$f3->get('GET.ESTADO'));
    }

    // Comentario Corrección estado PI
    public function guarda_comentario_estado_pi($f3) {
        echo \simulador_compra\cbx_grilla_compra::guarda_comentario_estado_pi($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.COMENTARIO'),$f3->get('GET.PROFORMA'));
    }

    // Buscar Comentarios asociados a la PI (PROFORAM)
    public function busca_comentario_pi($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::busca_comentario_pi($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.PI')));
    }

    // Buscar Existe Proforma
    public function busca_existe_proforma($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::busca_existe_proforma($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.PI')));
    }

    // Buscar Existe Archivo Proforma
    public function busca_existe_archivo($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::busca_existe_archivo($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.PI')));
    }

// ######################## INICIO Trabajo con flujo de aprobación ########################

    public function trabaja_flujo_aprobacion_insert($f3) {
        echo \simulador_compra\cbx_grilla_compra::trabaja_flujo_aprobacion_insert($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.ID_COLOR3'),$f3->get('GET.ESTADO'));
    }

    public function trabaja_flujo_aprobacion_update($f3) {
        echo \simulador_compra\cbx_grilla_compra::trabaja_flujo_aprobacion_update($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.PROFORMA'),$f3->get('GET.ESTADO'));
    }
// ######################## FIN Trabajo con flujo de aprobación ########################

    // Llenar despliega_hitorial_tabla
    public function llenar_tabla_historial($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::llenar_tabla_historial($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('GET.ID_COLOR3')));
    }

    // Traer Datos OC cuando existe PROFORMA en la Grilla
    public function traer_datos_oc($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::traer_datos_oc($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('GET.PI')));
    }

// ######################## INICIO TRABAJO CON MATCH ########################

    public function llenar_tabla_pmm($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::llenar_tabla_pmm($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.OC'),$f3->get('GET.PI')));
    }

    public function llenar_tabla_plan($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::llenar_tabla_plan($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.OC'),$f3->get('GET.PI')));
    }

    public function consultar_oc_linkeada($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::consultar_oc_linkeada($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.OC'),$f3->get('GET.PI')));
    }

    public function quitar_oc_cancelada($f3) {
        echo \simulador_compra\cbx_grilla_compra::quitar_oc_cancelada($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.OC'),$f3->get('GET.PI'));
    }

    public function agrega_tabla_b_ocpi($f3) {
        echo \simulador_compra\cbx_grilla_compra::agrega_tabla_b_ocpi($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.OC'),$f3->get('GET.PI'));
    }

    public function agrega_registroswsoc_a_tabla_b($f3) {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      //str_replace('.',',',$f3->get('GET.V_COSTO'))
        echo \simulador_compra\cbx_grilla_compra::agrega_registroswsoc_a_tabla_b($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.OC'),$f3->get('GET.PI'),$f3->get('GET.V_NOMBRE_ESTILO'),$f3->get('GET.V_NRO_ESTILO'),$f3->get('GET.V_ESTADO_ESTILO'),$f3->get('GET.V_NOMBRE_VARIACION'),$f3->get('GET.V_NRO_VARIACION'),$f3->get('GET.V_COLOR'),$f3->get('GET.V_COD_COLOR'),$f3->get('GET.V_NOMBRE_LINEA'),$f3->get('GET.V_NRO_LINEA'),$f3->get('GET.V_NOMBRE_SUB_LINEA'),$f3->get('GET.V_NRO_SUB_LINEA'),$f3->get('GET.V_TEMPORADA'),$f3->get('GET.V_CICLO_VIDA'),$f3->get('GET.V_ESTADO_OC'),$f3->get('GET.V_FECHA_EMBARQUE'),$f3->get('GET.V_FECHA_ETA'),$f3->get('GET.V_UNIDADES'),$f3->get('GET.V_COSTO'),$f3->get('GET.V_MONEDA'),$f3->get('GET.V_PAIS'));
    }

    public function valida_tablab_cuza_color3($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::valida_tablab_cuza_color3($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.OC'),$f3->get('GET.PI')));
    }

    public function btn_actualizar_match($f3) {
        echo \simulador_compra\cbx_grilla_compra::btn_actualizar_match($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.ID_COLOR3'),$f3->get('GET.LINEA'),$f3->get('GET.SUBLINEA'),$f3->get('GET.ESTILO'),$f3->get('GET.COLOR'));
    }

    public function listar_plan_compra_color($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_plan_compra_color($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.PROFORMA')));
    }

    public function generar_match($f3) {
        echo \simulador_compra\cbx_grilla_compra::generar_match($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.PROFORMA'),$f3->get('GET.ESTILO'),$f3->get('GET.CODVENTANA'),$f3->get('GET.OC'));
    }

    public function aprobar_opcion($f3) {
        echo \simulador_compra\cbx_grilla_compra::aprobar_opcion($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.ID_COLOR3'),$f3->get('GET.PROFORMA'));
    }

    public function listar_idcolor3_compra($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_idcolor3_compra($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.ID_COLOR3')));
    }

    public function insertar_historial($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::insertar_historial($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('GET.V_LINEA'),$f3->get('GET.V_SUBLINEA'),$f3->get('GET.V_MARCA'),$f3->get('GET.V_ESTILO'),$f3->get('GET.V_VENTANA'),$f3->get('GET.V_COLOR'),$f3->get('SESSION.login'),$f3->get('GET.V_PI'),$f3->get('GET.V_OC'),$f3->get('GET.V_ESTADO'),$f3->get('GET.V_ID_COLOR3'),$f3->get('GET.V_TIPOINSERT'),$f3->get('GET.V_NOM_LINEA'),$f3->get('GET.V_NOM_SUBLINEA'),$f3->get('GET.V_NOM_MARCA'),$f3->get('GET.V_NOM_VENTANA'),$f3->get('GET.V_NOM_COLOR')));
    }

    public function listar_ventana_embarque_llegada($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::listar_ventana_embarque_llegada($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.ID_COLOR3'),$f3->get('GET.PROFORMA')));
    }

    public function quita_registro_variacion($f3) {
        echo \simulador_compra\cbx_grilla_compra::quita_registro_variacion($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.OC'),$f3->get('GET.PI'));
    }

    public function agregar_oc_variacion($f3) {
        echo \simulador_compra\cbx_grilla_compra::agregar_oc_variacion($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.OC'),$f3->get('GET.PI'));
    }

    public function agregar_new_oc_variacion($f3) {
        echo \simulador_compra\cbx_grilla_compra::agregar_new_oc_variacion($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'));
    }

    public function busca_oc_estado_20($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::busca_oc_estado_20($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login')));
    }

    public function busca_estado_oc_pmm($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::busca_estado_oc_pmm($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('SESSION.login'),$f3->get('GET.OC')));
    }

    public function estado_oc_4_inserta_historial($f3) {
        echo \simulador_compra\cbx_grilla_compra::estado_oc_4_inserta_historial($f3->get('SESSION.COD_TEMPORADA'),$f3->get('SESSION.COD_DEPTO'),$f3->get('GET.LINEA'),$f3->get('GET.SUBLINEA'),$f3->get('GET.MARCA'),$f3->get('GET.ESTILO'),$f3->get('GET.VENTANA'),$f3->get('GET.COLOR'),$f3->get('SESSION.login'),$f3->get('GET.PI'),$f3->get('GET.OC'),$f3->get('GET.ESTADO'),$f3->get('GET.ID_COLOR3'),$f3->get('GET.TIPO_INSERT'),$f3->get('GET.NOM_LINEA'),$f3->get('GET.NOM_SUBLINEA'),$f3->get('GET.NOM_MARCA'),$f3->get('GET.NOM_VENTANA'),$f3->get('GET.NOM_COLOR'));
    }

// ######################## FIN TRABAJO CON MATCH ########################

    public function ComboboxAjusteCompra($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::Combobox_ajust_compra( $f3->get('SESSION.COD_TEMPORADA')
                                                                                    ,$f3->get('SESSION.COD_DEPTO')
                                                                                    ,$f3->get('GET.color3')
                                                                                    ,$f3->get('GET.tallas')));
    }
    public function ComboboxAjusteNCajas($f3) {

        echo json_encode(\simulador_compra\cbx_grilla_compra::Combobox_ajust_n_cajas( $f3->get('SESSION.COD_TEMPORADA')
                                                                                     ,$f3->get('SESSION.COD_DEPTO')
                                                                                     ,$f3->get('GET.color3')
                                                                                     ,$f3->get('GET.tallas')
                                                                                     ,$f3->get('GET.t_empaque')
                                                                                     ,$f3->get('GET.debut_reorder')));

    }
    public function checkboxgrupo($f3){
        echo json_encode(\simulador_compra\cbx_grilla_compra::checkbox_list_grupocompraXdepto($f3->get('SESSION.COD_TEMPORADA')
                                                                                                ,$f3->get('SESSION.COD_DEPTO')));

    }

// ######################## INICIO TRABAJO CON ACCESO SIMULADOR DE COMPRA SELECCIONA DEPARTAMENTO ########################

    public function busca_existe_pto_embarque($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::busca_existe_pto_embarque($f3->get('SESSION.COD_TEMPORADA'),$f3->get('GET.DEPTO'),$f3->get('SESSION.login')));
    }

    public function busca_existe_pto_costo($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::busca_existe_pto_costo($f3->get('SESSION.COD_TEMPORADA'),$f3->get('GET.DEPTO'),$f3->get('SESSION.login')));
    }

    public function busca_existe_pto_retail($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::busca_existe_pto_retail($f3->get('SESSION.COD_TEMPORADA'),$f3->get('GET.DEPTO'),$f3->get('SESSION.login')));
    }

    public function busca_existe_val_tienda($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::busca_existe_val_tienda($f3->get('SESSION.COD_TEMPORADA'),$f3->get('GET.DEPTO'),$f3->get('SESSION.login')));
    }

    public function busca_existe_marca($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::busca_existe_marca($f3->get('SESSION.COD_TEMPORADA'),$f3->get('GET.DEPTO'),$f3->get('SESSION.login')));
    }

// ######################## TRAER FECHA RECEPCION CD y DIAS DE ATRASO ########################

    public function trae_fecharcd_y_dias_atraso($f3) {
        echo json_encode(\simulador_compra\cbx_grilla_compra::trae_fecharcd_y_dias_atraso($f3->get('GET.FECHA_ESTA'),$f3->get('GET.FECHA_RECEP_PMM')));
    }



// ######################## FIN TRABAJO CON ACCESO SIMULADOR DE COMPRA SELECCIONA DEPARTAMENTO ########################








// Termina Clase
}
