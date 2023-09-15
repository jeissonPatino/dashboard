@extends('layouts.layouts')
@section('content')
<div class="row  gx-xl-10">
    <!--begin::Col-->
    <div class="col-xl-12 mb-5 mb-xl-10">
        <!--begin::Tables widget 16-->
        <div class="card card-flush h-xl-100">
            <!--begin::Header-->
            <div class="card-header pt-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-800">Crear Personas</span>
                </h3>
                <a href="{{ route('personas') }}"class="btn btn-sm btn-warning ms-3 px-4 py-3" >Volver</a>
                <!--end::Title-->
            </div>
        
   
        <div class="flex-row-fluid py-lg-5 px-lg-15">
            <form method="POST" "kt_docs_formvalidation_text" class="form" action="" autocomplete="off">
                <!--begin::Input group-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Nombres y apellidos</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Escribe el nombre y el apellido de la persona">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="nombre" id="nombre" placeholder="Nombres y apellidos" class="form-control form-control-solid mb-3 mb-lg-0"  value="" />
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Tipo Identificación</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Selecciona el tipo de identificación">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                    
                            <!--begin::Select-->
                            <select name="identificacion" id="identificacion" class="form-select form-select-solid mb-3 mb-lg-0">
                                <option value="">Seleccione una opción</option>
                                <option value="opcion1">Opción 1</option>
                                <option value="opcion2">Opción 2</option>
                                <option value="opcion3">Opción 3</option>
                            </select>
                            <!--end::Select-->
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-6">
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Genero</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Selecciona un genero">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                    
                            <!--begin::Select-->
                            <select name="select_input" class="form-select form-select-solid mb-3 mb-lg-0">
                                <option value="">Seleccione una opción</option>
                                <option value="opcion1">Opción 1</option>
                                <option value="opcion2">Opción 2</option>
                                <option value="opcion3">Opción 3</option>
                            </select>
                            <!--end::Select-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Ciudad</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Selecciona una ciudad">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                    
                            <!--begin::Select-->
                            <select name="select_input" class="form-select form-select-solid mb-3 mb-lg-0">
                                <option value="">Seleccione una opción</option>
                                <option value="opcion1">Opción 1</option>
                                <option value="opcion2">Opción 2</option>
                                <option value="opcion3">Opción 3</option>
                            </select>
                            <!--end::Select-->
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-6">
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Profesión</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Selecciona una profesión">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                    
                            <!--begin::Select-->
                            <select name="select_input" class="form-select form-select-solid mb-3 mb-lg-0">
                                <option value="">Seleccione una opción</option>
                                <option value="opcion1">Opción 1</option>
                                <option value="opcion2">Opción 2</option>
                                <option value="opcion3">Opción 3</option>
                            </select>
                            <!--end::Select-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Vinculación</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Selecciona un tipo de vinculación">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                    
                            <!--begin::Select-->
                            <select name="select_input" class="form-select form-select-solid mb-3 mb-lg-0">
                                <option value="">Seleccione una opción</option>
                                <option value="opcion1">Opción 1</option>
                                <option value="opcion2">Opción 2</option>
                                <option value="opcion3">Opción 3</option>
                            </select>
                            <!--end::Select-->
                        </div>
                    </div>
                </div>  
                <!--end::Input group-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Activos</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Ingresa los activos de la persona">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="number" name="activos" placeholder="$ Activos" class="form-control form-control-solid mb-3 mb-lg-0"  value="" />
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Pasivos</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Ingresa los pasivos de la persona">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="number" name="pasivos" placeholder="$ Pasivos" class="form-control form-control-solid mb-3 mb-lg-0"  value="" />
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Patrimonio</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Ingresa el patrimonio de la persona">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="number" name="Patrimonio" placeholder="$ Patrimonio" class="form-control form-control-solid mb-3 mb-lg-0"  value="" />
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Ingresos</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Ingresa los ingresos de la persona">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="number" name="Ingresos" placeholder="$ Ingresos" class="form-control form-control-solid mb-3 mb-lg-0"  value="" />
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Egresos</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Ingresa los egresos de la persona">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="number" name="Egresos" placeholder="$ Egresos" class="form-control form-control-solid mb-3 mb-lg-0"  value="" />
                            <!--end::Input-->
                        </div>
                    </div>
                </div>  
                <!--begin::Actions-->
                <button id="kt_docs_formvalidation_text_submit" type="submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Crear
                    </span>
                </button>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
    </div>
    </div>  
    </div>
@endsection