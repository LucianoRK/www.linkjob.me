<script>
    const perfil = {
        init: () => {
            perfil.validacaoPerfis(),
            perfil.camposModeloInfluencerPromotor(),
            perfil.mostrarCamposOutrosModeloInfluencerPromotor(),
            perfil.adicionarInputVideoModeloInfluencerPromotor(),
            perfil.excluirInputVideoModeloInfluencerPromotor(),
            perfil.adicionarInputFotoModeloInfluencerPromotor(),
            perfil.excluirInputFotoModeloInfluencerPromotor(),
            perfil.camposMaquiadorCabeleireiro(),
            perfil.adicionarInputFotoMaquiadorCabeleireiro(),
            perfil.excluirInputFotoMaquiadorCabeleireiro(),
            perfil.camposFotografoFilmaker(),
            perfil.adicionarInputFotoFotografoFilmaker(),
            perfil.excluirInputFotoFotografoFilmaker(),
            perfil.adicionarInputVideoFilmaker(),
            perfil.excluirInputVideoFilmaker(),
            perfil.camposDiretor(),
            perfil.adicionarInputFotoDiretor(),
            perfil.excluirInputFotoDiretor(),
            perfil.camposProdutor(),
            perfil.adicionarInputFotoProdutor(),
            perfil.excluirInputFotoProdutor(),
            perfil.camposLocacao(),
            perfil.adicionarInputFotoLocacao(),
            perfil.excluirInputFotoLocacao(),
            perfil.dataTable(),
            perfil.aprovar(),
            perfil.recusar(),
            perfil.multiSelect()
        },

        camposModeloInfluencerPromotor: () => {
            $('#perfil_1').on('click', function() {
                if ($('#perfil_1').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').val('');
                    $('.possui_tatuagem').attr('checked', false);
                    $('#div-possui-tatuagem').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').trigger('change');
                    $('#div-cor-cabelo-outro').attr('hidden', true);
                    $('#div-cor-olhos-outro').attr('hidden', true);
                    $('.possui_drt').attr('checked', false);
                    $('#div-drt').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').attr('checked', false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                    $(".excluir-input-video-modelo-influencer-promotor").each(function(index) {
                        $(this).parent().parent().remove();
                    });
                    $('.upload-modelo-influencer-promotor').val("");
                    $(".upload-modelo-influencer-promotor").each(function(index, value) {
                        if (index != 0) {
                            $(this).parent().parent().parent().remove();
                        }
                    });
                }
            });

            $('#perfil_2').on('click', function() {
                if ($('#perfil_2').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').val('');
                    $('.possui_tatuagem').attr('checked', false);
                    $('#div-possui-tatuagem').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').trigger('change');
                    $('#div-cor-cabelo-outro').attr('hidden', true);
                    $('#div-cor-olhos-outro').attr('hidden', true);
                    $('.possui_drt').attr('checked', false);
                    $('#div-drt').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').attr('checked', false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                    $(".excluir-input-video-modelo-influencer-promotor").each(function(index) {
                        $(this).parent().parent().remove();
                    });
                    $('.upload-modelo-influencer-promotor').val("");
                    $(".upload-modelo-influencer-promotor").each(function(index, value) {
                        if (index != 0) {
                            $(this).parent().parent().parent().remove();
                        }
                    });
                }
            });

            $('#perfil_3').on('click', function() {
                if ($('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').val('');
                    $('.possui_tatuagem').attr('checked', false);
                    $('#div-possui-tatuagem').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').trigger('change');
                    $('#div-cor-cabelo-outro').attr('hidden', true);
                    $('#div-cor-olhos-outro').attr('hidden', true);
                    $('.possui_drt').attr('checked', false);
                    $('#div-drt').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').attr('checked', false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                    $(".excluir-input-video-modelo-influencer-promotor").each(function(index) {
                        $(this).parent().parent().remove();
                    });
                    $('.upload-modelo-influencer-promotor').val("");
                    $(".upload-modelo-influencer-promotor").each(function(index, value) {
                        if (index != 0) {
                            $(this).parent().parent().parent().remove();
                        }
                    });
                }
            });

            $('.classe_perfil').on('click', function() {
                if ($('#perfil_1').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Modelo');
                }

                if ($('#perfil_2').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Influencer');
                }

                if ($('#perfil_3').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Promotor(a)');
                }

                if ($('#perfil_1').prop('checked') && $('#perfil_2').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Modelo e Influencer');
                }

                if ($('#perfil_1').prop('checked') && $('#perfil_3').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Modelo e Promotor(a)');
                }

                if ($('#perfil_2').prop('checked') && $('#perfil_3').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Influencer e Promotor(a)');
                }

                if ($('#perfil_1').prop('checked') && $('#perfil_2').prop('checked') && $('#perfil_3').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Modelo, Influencer e Promotor(a)');
                }

                if ($('#perfil_4').prop('checked')) {
                    $('.titulo-perfil-maquiador-cabeleireiro').html('Maquiador(a)');
                }

                if ($('#perfil_5').prop('checked')) {
                    $('.titulo-perfil-maquiador-cabeleireiro').html('Cabeleireiro(a)');
                }

                if ($('#perfil_4').prop('checked') && $('#perfil_5').prop('checked')) {
                    $('.titulo-perfil-maquiador-cabeleireiro').html('Maquiador(a) e Cabeleireiro(a)');
                }

                if ($('#perfil_6').prop('checked')) {
                    $('.titulo-perfil-fotografo-filmaker').html('Fotógrafo(a)');
                }

                if ($('#perfil_7').prop('checked')) {
                    $('.titulo-perfil-fotografo-filmaker').html('Filmmaker');
                    $('#div-video-filmaker').attr('hidden', false);
                } else {
                    $('#div-video-filmaker').attr('hidden', true);
                    $('.input-filmaker').val('');
                    $(".excluir-input-video-filmaker").each(function(index) {
                        $(this).parent().parent().remove();
                    });
                }

                if ($('#perfil_6').prop('checked') && $('#perfil_7').prop('checked')) {
                    $('.titulo-perfil-fotografo-filmaker').html('Fotógrafo(a) e Filmmaker');
                }
            });
        },

        mostrarCamposOutrosModeloInfluencerPromotor: () => {
            $('#cor_cabelo').on('click', function() {
                let cor_cabelo = $(this).val();

                if (cor_cabelo == 'outro') {
                    $('#div-cor-cabelo-outro').attr('hidden', false);
                } else {
                    $('#div-cor-cabelo-outro').attr('hidden', true);
                }
            });

            $('#cor_olhos').on('click', function() {
                let cor_cabelo = $(this).val();

                if (cor_cabelo == 'outro') {
                    $('#div-cor-olhos-outro').attr('hidden', false);
                } else {
                    $('#div-cor-olhos-outro').attr('hidden', true);
                }
            });

            $('.possui_tatuagem').on('click', function() {
                if ($('#tatuagem_sim').prop('checked')) {
                    $('#div-possui-tatuagem').attr('hidden', false);
                } else {
                    $('#div-possui-tatuagem').attr('hidden', true);
                }
            });

            $('.possui_drt').on('click', function() {
                if ($('#drt_sim').prop('checked')) {
                    $('#div-drt').attr('hidden', false);
                } else {
                    $('#div-drt').attr('hidden', true);
                }
            });
        },

        multiSelect: () => {
            $('.multiple-select').select2();

            if (!$('.multiple-select').hasClass('col-sm-12')) {
                $('.multiple-select').addClass('col-sm-12');
            }
        },

        validacaoPerfis: () => {
            $(document).on('click', '#salvar-novo-perfil', function() {
                let perfil_selecionado = false;
                let erro = false;

                $('*').removeClass('has-error');
                $('.msg').html('');

                $('.classe_perfil').each(function(index, value) {
                    let id_nome = $(value).attr('id');

                    if ($('#' + id_nome).prop('checked')) {
                        perfil_selecionado = true;
                    }
                });

                if (!perfil_selecionado) {
                    $('.classe_perfil').first().parent().parent().find('.msg').html('Selecione ao menos uma opção.');
                } else {
                    // Primeiro valida Modelo, Promotor e Maquiador
                    if ($('#perfil_1').prop('checked') || $('#perfil_2').prop('checked') || $('#perfil_3').prop('checked')) {
                        $(".upload-modelo-influencer-promotor").each(function(index, value) {
                            if ($(value)[0].files.length <= 0) {
                                erro = true;

                                $(value).parent().parent().find('.msg').html('Anexe ao menos uma foto.');
                            }
                        });

                        if (!$('#altura').val()) {
                            erro = true;

                            $('#altura').parent().addClass('has-error')
                            $('#altura').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        if (!$('#peso').val()) {
                            erro = true;

                            $('#peso').parent().addClass('has-error')
                            $('#peso').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        if (!$('#busto_torax').val()) {
                            erro = true;

                            $('#busto_torax').parent().addClass('has-error')
                            $('#busto_torax').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        if (!$('#cintura').val()) {
                            erro = true;

                            $('#cintura').parent().addClass('has-error')
                            $('#cintura').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        if (!$('#quadril').val()) {
                            erro = true;

                            $('#quadril').parent().addClass('has-error')
                            $('#quadril').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        if (!$('#manequim').val()) {
                            erro = true;

                            $('#manequim').parent().addClass('has-error')
                            $('#manequim').parent().find('.msg').html('Campo obrigatório.');
                        }

                        if (!$('#calcado').val()) {
                            erro = true;

                            $('#calcado').parent().addClass('has-error')
                            $('#calcado').parent().find('.msg').html('Campo obrigatório.');
                        }

                        if (!$('#tatuagem_sim').prop('checked') && !$('#tatuagem_nao').prop('checked')) {
                            erro = true;

                            $('#tatuagem_sim').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        if (!$('#cor_pele').val()) {
                            erro = true;

                            $('#cor_pele').parent().addClass('has-error')
                            $('#cor_pele').parent().find('.msg').html('Campo obrigatório.');
                        }

                        if (!$('#cor_cabelo').val()) {
                            erro = true;

                            $('#cor_cabelo').parent().addClass('has-error')
                            $('#cor_cabelo').parent().find('.msg').html('Campo obrigatório.');

                        } else if ($('#cor_cabelo').val() == 'outro' && !$('#cor_cabelo_outro').val()) {
                            erro = true;

                            $('#cor_cabelo_outro').parent().addClass('has-error')
                            $('#cor_cabelo_outro').parent().find('.msg').html('Campo obrigatório.');
                        }

                        if (!$('#cor_olhos').val()) {
                            erro = true;

                            $('#cor_olhos').parent().addClass('has-error')
                            $('#cor_olhos').parent().find('.msg').html('Campo obrigatório.');

                        } else if ($('#cor_olhos').val() == 'outro' && !$('#cor_olhos_outro').val()) {
                            erro = true;

                            $('#cor_olhos_outro').parent().addClass('has-error')
                            $('#cor_olhos_outro').parent().find('.msg').html('Campo obrigatório.<br>');
                        }

                        if (!$('#drt_sim').prop('checked') && !$('#drt_nao').prop('checked')) {
                            erro = true;

                            $('#drt_sim').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        if (!$('.categoria-fotos-modelo-influencer-promotor').val()) {
                            erro = true;

                            $('.categoria-fotos-modelo-influencer-promotor').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        if (!$('#video_apresentacao').val()) {
                            erro = true;

                            $('#video_apresentacao').parent().addClass('has-error')
                            $('#video_apresentacao').parent().parent().find('.msg').html('Campo obrigatório.');
                        }
                    }

                    if ($('#perfil_4').prop('checked') || $('#perfil_5').prop('checked')) {
                        if (!$('.categoria-fotos-maquiador-cabeleireiro').val()) {
                            erro = true;

                            $('.categoria-fotos-maquiador-cabeleireiro').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        $(".upload-maquiador-cabeleireiro").each(function(index, value) {
                            if ($(value)[0].files.length <= 0) {
                                erro = true;

                                $(value).parent().parent().find('.msg').html('Anexe ao menos uma foto.');
                            }
                        });
                    }

                    if ($('#perfil_6').prop('checked') || $('#perfil_7').prop('checked')) {
                        if (!$('.categoria-fotos-fotografo-filmaker').val()) {
                            erro = true;

                            $('.categoria-fotos-fotografo-filmaker').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        $(".upload-fotografo-filmaker").each(function(index, value) {
                            if ($(value)[0].files.length <= 0) {
                                erro = true;

                                $(value).parent().parent().find('.msg').html('Anexe ao menos uma foto.');
                            }
                        });
                    }

                    if ($('#perfil_8').prop('checked')) {
                        if (!$('.categoria-fotos-diretor').val()) {
                            erro = true;

                            $('.categoria-fotos-diretor').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        $(".upload-diretor").each(function(index, value) {
                            if ($(value)[0].files.length <= 0) {
                                erro = true;

                                $(value).parent().parent().find('.msg').html('Anexe ao menos uma foto.');
                            }
                        });
                    }

                    if ($('#perfil_9').prop('checked')) {
                        if (!$('.categoria-fotos-produtor').val()) {
                            erro = true;

                            $('.categoria-fotos-produtor').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        $(".upload-produtor").each(function(index, value) {
                            if ($(value)[0].files.length <= 0) {
                                erro = true;

                                $(value).parent().parent().find('.msg').html('Anexe ao menos uma foto.');
                            }
                        });
                    }

                    if ($('#perfil_10').prop('checked')) {
                        if (!$('.categoria-fotos-locacao').val()) {
                            erro = true;

                            $('.categoria-fotos-locacao').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        $(".upload-locacao").each(function(index, value) {
                            if ($(value)[0].files.length <= 0) {
                                erro = true;

                                $(value).parent().parent().find('.msg').html('Anexe ao menos uma foto.');
                            }
                        });
                    }

                    if (!erro) {
                        $("#form-novo-perfil").submit();
                    } else {
                        templateFunctions.swalPadrao('warning', 'Atenção!', 'Preencha os campos corretamente.');
                    }
                }
            })
        },

        adicionarInputVideoModeloInfluencerPromotor: () => {
            $('#adicionar-input-video-modelo-influencer-promotor').on('click', function() {
                $('#div-videos-modelo-influencer-promotor').append('<div class="input-group"><input name="video_modelo_influencer_promotor[]" value="" type="text" class="form-control input-modelo-influencer-promotor" placeholder="Caso possua video basta informar o link"><span class="input-group-btn"><button class="btn btn-default excluir-input-video-modelo-influencer-promotor" type="button"><i class="text-danger fas fa-trash"></i></button></span><span class="text-danger msg" style="font-size: 13px;"></span></div>');
            });
        },

        excluirInputVideoModeloInfluencerPromotor: () => {
            $(document).on('click', '.excluir-input-video-modelo-influencer-promotor', function() {
                $(this).parent().parent().remove();
            });
        },

        camposMaquiadorCabeleireiro: () => {
            $('#perfil_4').on('click', function() {
                if ($('#perfil_4').prop('checked')) {
                    $('#div-maquiador-cabeleireiro').attr('hidden', false);
                } else if (!$('#perfil_4').prop('checked') && !$('#perfil_5').prop('checked')) {
                    $('#div-maquiador-cabeleireiro').attr('hidden', true);
                    $('.input-maquiador-cabeleireiro').val('');
                    $('.input-maquiador-cabeleireiro').trigger('change');
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                    $('.upload-maquiador-cabeleireiro').val("");
                    $(".upload-maquiador-cabeleireiro").each(function(index, value) {
                        if (index != 0) {
                            $(this).parent().parent().parent().remove();
                        }
                    });
                }
            });

            $('#perfil_5').on('click', function() {
                if ($('#perfil_5').prop('checked')) {
                    $('#div-maquiador-cabeleireiro').attr('hidden', false);
                } else if (!$('#perfil_4').prop('checked') && !$('#perfil_5').prop('checked')) {
                    $('#div-maquiador-cabeleireiro').attr('hidden', true);
                    $('.input-maquiador-cabeleireiro').val('');
                    $('.input-maquiador-cabeleireiro').trigger('change');
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                    $('.upload-maquiador-cabeleireiro').val("");
                    $(".upload-maquiador-cabeleireiro").each(function(index, value) {
                        if (index != 0) {
                            $(this).parent().parent().parent().remove();
                        }
                    });
                }
            });
        },
        
        camposFotografoFilmaker: () => {
            $('#perfil_6').on('click', function() {
                if ($('#perfil_6').prop('checked')) {
                    $('#div-fotografo-filmaker').attr('hidden', false);
                } else if (!$('#perfil_6').prop('checked') && !$('#perfil_7').prop('checked')) {
                    $('#div-fotografo-filmaker').attr('hidden', true);
                    $('.input-fotografo-filmaker').val('');
                    $('.input-fotografo-filmaker').trigger('change');
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                    $('.upload-fotografo-filmaker').val("");
                    $(".upload-fotografo-filmaker").each(function(index, value) {
                        if (index != 0) {
                            $(this).parent().parent().parent().remove();
                        }
                    });
                }
            });

            $('#perfil_7').on('click', function() {
                if ($('#perfil_7').prop('checked')) {
                    $('#div-fotografo-filmaker').attr('hidden', false);
                } else if (!$('#perfil_7').prop('checked') && !$('#perfil_6').prop('checked')) {
                    $('#div-fotografo-filmaker').attr('hidden', true);
                    $('.input-fotografo-filmaker').val('');
                    $('.input-fotografo-filmaker').trigger('change');
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                    $('.upload-fotografo-filmaker').val("");
                    $(".upload-fotografo-filmaker").each(function(index, value) {
                        if (index != 0) {
                            $(this).parent().parent().parent().remove();
                        }
                    });
                }
            });
        },

        adicionarInputVideoFilmaker: () => {
            $('#adicionar-input-video-filmaker').on('click', function() {
                $('#div-videos-filmaker').append('<div class="input-group"><input name="video_filmaker[]" value="" type="text" class="form-control input-filmaker" placeholder="Caso possua video basta informar o link"><span class="input-group-btn"><button class="btn btn-default excluir-input-video-filmaker" type="button"><i class="text-danger fas fa-trash"></i></button></span><span class="text-danger msg" style="font-size: 13px;"></span></div>');
            });
        },

        excluirInputVideoFilmaker: () => {
            $(document).on('click', '.excluir-input-video-filmaker', function() {
                $(this).parent().parent().remove();
            });
        },

        camposDiretor: () => {
            $('#perfil_8').on('click', function() {
                if ($('#perfil_8').prop('checked')) {
                    $('#div-diretor').attr('hidden', false);
                } else if (!$('#perfil_8').prop('checked')) {
                    $('#div-diretor').attr('hidden', true);
                    $('.input-diretor').val('');
                    $('.input-diretor').trigger('change');
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                    $('.upload-diretor').val("");
                    $(".upload-diretor").each(function(index, value) {
                        if (index != 0) {
                            $(this).parent().parent().parent().remove();
                        }
                    });
                }
            });
        },

        camposProdutor: () => {
            $('#perfil_9').on('click', function() {
                if ($('#perfil_9').prop('checked')) {
                    $('#div-produtor').attr('hidden', false);
                } else if (!$('#perfil_9').prop('checked')) {
                    $('#div-produtor').attr('hidden', true);
                    $('.input-produtor').val('');
                    $('.input-produtor').trigger('change');
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                    $('.upload-produtor').val("");
                    $(".upload-produtor").each(function(index, value) {
                        if (index != 0) {
                            $(this).parent().parent().parent().remove();
                        }
                    });
                }
            });
        },

        camposLocacao: () => {
            $('#perfil_10').on('click', function() {
                if ($('#perfil_10').prop('checked')) {
                    $('#div-locacao').attr('hidden', false);
                } else if (!$('#perfil_10').prop('checked')) {
                    $('#div-locacao').attr('hidden', true);
                    $('.input-locacao').val('');
                    $('.input-locacao').trigger('change');
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                    $('.upload-locacao').val("");
                    $(".upload-locacao").each(function(index, value) {
                        if (index != 0) {
                            $(this).parent().parent().parent().remove();
                        }
                    });
                }
            });
        },

        dataTable: () => {
            let $table = '#table-aprovacao';
            let $order_col = 0;
            let $order = 'asc';
            let $search = true;
            let $paging = false;

            $DataTableLangCustom = {
                paging: false,
                language: {
                    'sEmptyTable': 'Nenhum registro encontrado',
                    'sInfo': 'Mostrando de _START_ até _END_ de _TOTAL_ registros',
                    'sInfoEmpty': 'Mostrando 0 até 0 de 0 registros',
                    'sInfoFiltered': '(Filtrados de _MAX_ registros)',
                    'sInfoPostFix': '',
                    'sInfoThousands': '.',
                    'sLengthMenu': '_MENU_ resultados por página',
                    'sLoadingRecords': 'Carregando...',
                    'sProcessing': 'Processando...',
                    'sZeroRecords': 'Nenhum registro encontrado',
                    'sSearch': 'Pesquisar',
                    'oPaginate': {
                        'sNext': 'Próximo',
                        'sPrevious': 'Anterior',
                        'sFirst': 'Primeiro',
                        'sLast': 'Último',
                    },
                    'oAria': {
                        'sSortAscending': ': Ordenar colunas de forma ascendente',
                        'sSortDescending': ': Ordenar colunas de forma descendente',
                    },
                },
            };

            $DataTableLangCustom = $.extend({
                searching: false,
                paging: false
            }, $DataTableLangCustom);

            $DataTableLangCustom['searching'] = $search;
            $DataTableLangCustom['paging'] = $paging;

            if (!$.fn.DataTable.isDataTable($table)) {
                let $dt = $($table).DataTable($DataTableLangCustom);

                $dt.order([$order_col, $order]).draw();

                return $dt;
            }
        },

        aprovar: () => {
            $('.btn-aprovar-perfil').on('click', function() {
                Swal.fire({
                    title: 'Atenção',
                    text: "Deseja realmente aprovar o perfil selecionado?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Sucesso!',
                            '',
                            'success'
                        )
                    }
                })
            });
        },

        recusar: () => {
            $('.btn-recusar-perfil').on('click', function() {
                Swal.fire({
                    title: 'Atenção',
                    text: "Deseja realmente recusar o perfil selecionado?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Sucesso!',
                            '',
                            'success'
                        )
                    }
                })
            });
        },

        adicionarInputFotoModeloInfluencerPromotor: () => {
            var contador = 1;

            $('#adicionar-input-foto-modelo-influencer-promotor').on('click', function () {
                if ( $('.pai-modelo-influencer-promotor').length < 9) {
                    $('#div-mais-foto-modelo-influencer-promotor').append('<div class="pai-modelo-influencer-promotor"><div class="form-group row"><div class="col-md-2"></div><label class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label><div class="col-md-6"><div class="input-group"><select class="col-sm-12 multiple-select categoria-fotos-modelo-influencer-promotor input-modelo-influencer-promotor" name="modelo['+contador+'][categoria][]" multiple="multiple"><?php if (!empty($modelo_promotor_influencer)) { ?><?php foreach ($modelo_promotor_influencer as $modelo) { ?><?php if ($modelo['nome'] != 'Video') { ?><option value="<?php echo $modelo['grupo_foto_id']; ?>"> <?php echo $modelo['nome']; ?> </option><?php } ?><?php } ?><?php } ?></select><span class="input-group-btn"><button style="height: 38px;" class="btn btn-default excluir-input-foto-modelo-influencer-promotor" type="button"><i class="text-danger fas fa-trash"></i></button></span></div><span class="text-danger msg" style="font-size: 13px;"></span></div></div><div class="form-group row"><div class="col-md-2"></div><label class="col-md-2 col-form-label"></label><div class="col-md-6"><input type="file" name="modelo['+contador+'][upload][]" class="btn btn-primary upload-modelo-influencer-promotor" accept="image/png, image/jpg, image/jpeg"/><span class="text-danger msg" style="font-size: 13px;"></span><p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg. <br> O limite por foto é de até 10mb.</p></div></div></div>');
                    perfil.multiSelect();
                    contador++;
                }
            });
        },

        excluirInputFotoModeloInfluencerPromotor: () => {
            $(document).on('click', '.excluir-input-foto-modelo-influencer-promotor', function() {
               $(this).parent().parent().parent().parent().parent().remove();
            });
        },

        adicionarInputFotoMaquiadorCabeleireiro: () => {
            var contador2 = 1;

            $('#adicionar-input-foto-maquiador-cabeleireiro').on('click', function () {
                if ( $('.pai-maquiador-cabeleireiro').length < 9) {
                    $('#div-mais-foto-maquiador-cabeleireiro').append('<div class="pai-maquiador-cabeleireiro"><div class="form-group row"><div class="col-md-2"></div><label class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label><div class="col-md-6"><div class="input-group"><select class="col-sm-12 multiple-select categoria-fotos-maquiador-cabeleireiro input-maquiador-cabeleireiro" name="maquiador_cabeleireiro['+contador2+'][categoria][]" multiple="multiple"><?php if (!empty($cabeleireiro_maquiador)) { ?><?php foreach ($cabeleireiro_maquiador as $maquiador) { ?><?php if ($maquiador['nome'] != 'Video') { ?><option value="<?php echo $maquiador['grupo_foto_id']; ?>"> <?php echo $maquiador['nome']; ?> </option><?php } ?><?php } ?><?php } ?></select><span class="input-group-btn"><button style="height: 39px;" class="btn btn-default excluir-input-foto-maquiador-cabeleireiro" type="button"><i class="text-danger fas fa-trash"></i></button></span></div><span class="text-danger msg" style="font-size: 13px;"></span></div></div><div class="form-group row"><div class="col-md-2"></div><label class="col-md-2 col-form-label"></label><div class="col-md-6"><input type="file" name="maquiador_cabeleireiro['+contador2+'][upload][]" class="btn btn-primary upload-maquiador-cabeleireiro" accept="image/png, image/jpg, image/jpeg"/><span class="text-danger msg" style="font-size: 13px;"></span><p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg. <br> O limite por foto é de até 10mb.</p></div></div></div>');
                    perfil.multiSelect();
                    contador2++;
                }
            });
        },

        excluirInputFotoMaquiadorCabeleireiro: () => {
            $(document).on('click', '.excluir-input-foto-maquiador-cabeleireiro', function() {
               $(this).parent().parent().parent().parent().parent().remove();
            });
        },

        adicionarInputFotoFotografoFilmaker: () => {
            var contador3 = 1;

            $('#adicionar-input-foto-fotografo-filmaker').on('click', function () {
                if ( $('.pai-fotografo-filmaker').length < 9) {
                    $('#div-mais-foto-fotografo-filmaker').append('<div class="pai-fotografo-filmaker"><div class="form-group row"><div class="col-md-2"></div><label class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label><div class="col-md-6"><div class="input-group"><select class="col-sm-12 multiple-select input-fotografo-filmaker categoria-fotos-fotografo-filmaker" name="fotografo_filmaker['+contador3+'][categoria][]" multiple="multiple"><?php if (!empty($fotografo_filmaker)) { ?><?php foreach ($fotografo_filmaker as $fotografo) { ?><?php if ($fotografo['nome'] != 'Video') { ?><option value="<?php echo $fotografo['grupo_foto_id']; ?>"> <?php echo $fotografo['nome']; ?> </option><?php } ?><?php } ?><?php } ?></select><span class="input-group-btn"><button style="height: 39px;" class="btn btn-default excluir-input-foto-fotografo-filmaker" type="button"><i class="text-danger fas fa-trash"></i></button></span></div><span class="text-danger msg" style="font-size: 13px;"></span></div></div><div class="form-group row"><div class="col-md-2"></div><label class="col-md-2 col-form-label"></label><div class="col-md-6"><input type="file" name="fotografo_filmaker['+contador3+'][upload][]" class="btn btn-primary upload-fotografo-filmaker" accept="image/png, image/jpg, image/jpeg"/><span class="text-danger msg" style="font-size: 13px;"></span><p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg. <br> O limite por foto é de até 10mb.</p></div></div></div>');
                    perfil.multiSelect();
                    contador3++;
                }
            });
        },

        excluirInputFotoFotografoFilmaker: () => {
            $(document).on('click', '.excluir-input-foto-fotografo-filmaker', function() {
               $(this).parent().parent().parent().parent().parent().remove();
            });
        },

        adicionarInputFotoDiretor: () => {
            var contador4 = 1;

            $('#adicionar-input-foto-diretor').on('click', function () {
                if ( $('.pai-diretor').length < 9) {
                    $('#div-mais-foto-diretor').append('<div class="pai-diretor"><div class="form-group row"><div class="col-md-2"></div><label for="categoria-diretor" class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label><div class="col-md-6"><div class="input-group"><select class="col-sm-12 multiple-select input-diretor categoria-fotos-diretor" name="diretor['+contador4+'][categoria][]" multiple="multiple"><?php if (!empty($categoria_diretor)) { ?><?php foreach ($categoria_diretor as $diretor) { ?><?php if ($diretor['nome'] != 'Video') { ?><option value="<?php echo $diretor['grupo_foto_id']; ?>"> <?php echo $diretor['nome']; ?> </option><?php } ?><?php } ?><?php } ?></select><span class="input-group-btn"><button style="height: 38px;" class="btn btn-default excluir-input-foto-diretor" type="button"><i class="text-danger fas fa-trash"></i></button></span></div><span class="text-danger msg" style="font-size: 13px;"></span></div></div><div class="form-group row"><div class="col-md-2"></div><label class="col-md-2 col-form-label"></label><div class="col-md-6"><input type="file" name="diretor['+contador4+'][upload][]" class="btn btn-primary upload-diretor" accept="image/png, image/jpg, image/jpeg" multiple /><span class="text-danger msg" style="font-size: 13px;"></span><p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg. <br> O limite por foto é de até 10mb.</p></div></div></div>');
                    perfil.multiSelect();
                    contador4++;
                }
            });
        },

        excluirInputFotoDiretor: () => {
            $(document).on('click', '.excluir-input-foto-diretor', function() {
               $(this).parent().parent().parent().parent().parent().remove();
            });
        },

        adicionarInputFotoProdutor: () => {
            var contador5 = 1;

            $('#adicionar-input-foto-produtor').on('click', function () {
                if ( $('.pai-produtor').length < 9) {
                    $('#div-mais-foto-produtor').append('<div class="pai-produtor"><div class="form-group row"><div class="col-md-2"></div><label class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label><div class="col-md-6"><div class="input-group"><select class="col-sm-12 multiple-select input-produtor categoria-fotos-produtor" name="produtor['+contador5+'][categoria][]" multiple="multiple"><?php if (!empty($categoria_produtor)) { ?><?php foreach ($categoria_produtor as $produtor) { ?><?php if ($produtor['nome'] != 'Video') { ?><option value="<?php echo $produtor['grupo_foto_id']; ?>"> <?php echo $produtor['nome']; ?></option><?php } ?><?php } ?><?php } ?></select><span class="input-group-btn"><button style="height: 38px;" class="btn btn-default excluir-input-foto-produtor" type="button"><i class="text-danger fas fa-trash"></i></button></span></div><span class="text-danger msg" style="font-size: 13px;"></span></div></div><div class="form-group row"><div class="col-md-2"></div><label class="col-md-2 col-form-label"></label><div class="col-md-6"><input type="file" name="produtor['+contador5+'][upload][]" class="btn btn-primary upload-produtor" accept="image/png, image/jpg, image/jpeg" multiple /><span class="text-danger msg" style="font-size: 13px;"></span><p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg. <br> O limite por foto é de até 10mb.</p></div></div></div>');
                    perfil.multiSelect();
                    contador5++;
                }
            });
        },
        
        excluirInputFotoProdutor: () => {
            $(document).on('click', '.excluir-input-foto-produtor', function() {
               $(this).parent().parent().parent().parent().parent().remove();
            });
        },

        adicionarInputFotoLocacao: () => {
            var contador6 = 1;

            $('#adicionar-input-foto-locacao').on('click', function () {
                if ( $('.pai-locacao').length < 19) {
                    $('#div-mais-foto-locacao').append('<div class="pai-locacao"><div class="form-group row"><div class="col-md-2"></div><label class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label><div class="col-md-6"><div class="input-group"><select class="col-sm-12 multiple-select categoria-fotos-locacao input-locacao" name="locacao['+contador6+'][categoria][]" multiple="multiple"><?php if (!empty($categoria_locacao)) { ?><?php foreach ($categoria_locacao as $locacao) { ?><?php if ($locacao['nome'] != 'Video') { ?><option value="<?php echo $locacao['grupo_foto_id']; ?>"> <?php echo $locacao['nome']; ?> </option><?php } ?><?php } ?><?php } ?></select><span class="input-group-btn"><button style="height: 38px;" class="btn btn-default excluir-input-foto-locacao" type="button"><i class="text-danger fas fa-trash"></i></button></span></div><span class="text-danger msg" style="font-size: 13px;"></span></div></div><div class="form-group row"><div class="col-md-2"></div><label class="col-md-2 col-form-label"></label><div class="col-md-6"><input type="file" name="locacao['+contador6+'][upload][]" class="btn btn-primary upload-locacao" accept="image/png, image/jpg, image/jpeg" multiple /><span class="text-danger msg" style="font-size: 13px;"></span><p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg. <br> O limite por foto é de até 10mb.</p></div></div></div>');
                    perfil.multiSelect();
                    contador6++;
                }
            });
        },
        
        excluirInputFotoLocacao: () => {
            $(document).on('click', '.excluir-input-foto-locacao', function() {
               $(this).parent().parent().parent().parent().parent().remove();
            });
        }
    }

    perfil.init()
</script>