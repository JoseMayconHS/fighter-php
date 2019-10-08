$(function() {
 $(".menu-distracao-desligado").addClass("menu-distracao-ligado");


 //SCRIPT DOS FORMS

 	$("#form-combate").ajaxForm({
 		target: $("#div-combate"),
 		success: function() {
 			$("#form-combate").resetForm();
 			$(".btn-more").addClass("btn-more-visivel");
 			//Adicionando as classes especiais por causa da alteração na altura do site
 			$(".efeito-exibido1").addClass("efeito-exibido1-excecao");
 			$(".efeito-exibido2").addClass("efeito-exibido2-excecao");
 			$(".efeito-exibido3").addClass("efeito-exibido3-excecao");
 			$(".efeito-exibido4").addClass("efeito-exibido4-excecao");
 			//Retirando as classes anteriores por causa da alteração na altura do site
 			$(".efeito-exibido1").removeClass("efeito-exibido1");
 			$(".efeito-exibido2").removeClass("efeito-exibido2");
 			$(".efeito-exibido3").removeClass("efeito-exibido3");
 			$(".efeito-exibido4").removeClass("efeito-exibido4");

 		}
 	})

 	$("#form-criar").ajaxForm({
 		target: $("#div-criar"),
 		success: function() {
 			$(".btn-more").addClass("btn-more-visivel");
 			//Adicionando as classes especiais por causa da alteração na altura do site
 			$(".efeito-exibido1").addClass("efeito-exibido1-excecao");
 			$(".efeito-exibido2").addClass("efeito-exibido2-excecao");
 			$(".efeito-exibido3").addClass("efeito-exibido3-excecao");
 			$(".efeito-exibido4").addClass("efeito-exibido4-excecao");
 			//Retirando as classes anteriores por causa da alteração na altura do site
 			$(".efeito-exibido1").removeClass("efeito-exibido1");
 			$(".efeito-exibido2").removeClass("efeito-exibido2");
 			$(".efeito-exibido3").removeClass("efeito-exibido3");
 			$(".efeito-exibido4").removeClass("efeito-exibido4");

 		}
 	})


 	$("#form-formulario").ajaxForm({
 		target: $("#div-criar"),
 		success: function() {
 			$("form-formulario").resetForm();
 		}
 	})

 	$("#form-apagar").ajaxForm({
 		target: $("#div-criar"),
 		success: function() {
 			$("#form-apagar").resetForm();
 		}
 	})

 //FIM SCRIPT DOS FORMS

 $(".btn-luta").click(function() {
		
	})

	//EVITANDO PROBLEMAS NO DISIGNER

	$(".btn-more").click(function() {
		$(".eye-closed").toggleClass("eye-visivel");
		$(".eye-open").toggleClass("eye-visivel");
		$(".div_luta").toggleClass("div_luta-visivel");
		$(".efeito-exibido4").addClass("efeito-invisivel");
		$(".efeito-exibido3").addClass("efeito-invisivel");
		$(".efeito-exibido2").addClass("efeito-invisivel");
		$(".efeito-exibido1").addClass("efeito-invisivel");
	})


	//FIM DO EVITANDO


	

	//EFEITO APAGAR

	$(".span-apagar").click(function() {
		$(".apagar-hidden").toggleClass("apagar-show");
		$(".span-apagar").toggleClass("exibido");
	})

	//FIM EFEITO APAGAR


	//EFEITO DO MENU EXIBIDO
	$(window).scroll(function() {
		if ($(this).scrollTop() < 199) {
			$(".efeito-exibido4").removeClass("exibido");
			$(".efeito-exibido3").removeClass("exibido");
			$(".efeito-exibido2").removeClass("exibido");
			$(".efeito-exibido1").addClass("exibido");
		}
		 if($(this).scrollTop() > 200  && $(this).scrollTop() < 430) {
			$(".efeito-exibido1").removeClass("exibido");
			$(".efeito-exibido3").removeClass("exibido");
			$(".efeito-exibido4").removeClass("exibido");
			$(".efeito-exibido2").addClass("exibido");
		}
		 if($(this).scrollTop() > 431 && $(this).scrollTop() < 800) {
			$(".efeito-exibido2").removeClass("exibido");
			$(".efeito-exibido1").removeClass("exibido");
			$(".efeito-exibido4").removeClass("exibido");
			$(".efeito-exibido3").addClass("exibido");
		}
		if($(this).scrollTop() > 801) {
			$(".efeito-exibido3").removeClass("exibido");
			$(".efeito-exibido1").removeClass("exibido");
			$(".efeito-exibido2").removeClass("exibido");
			$(".efeito-exibido4").addClass("exibido");
		}
	})	
	//FIM EFEITO

	//EFEITO DO MENU COM AS CLASSES ESPECIAIS

	$(window).scroll(function() {
		if ($(this).scrollTop() < 350) {
			$(".efeito-exibido4-excecao").removeClass("exibido");
			$(".efeito-exibido3-excecao").removeClass("exibido");
			$(".efeito-exibido2-excecao").removeClass("exibido");
			$(".efeito-exibido1-excecao").addClass("exibido");
		}
		 if($(this).scrollTop() > 350  && $(this).scrollTop() < 820) {
			$(".efeito-exibido1-excecao").removeClass("exibido");
			$(".efeito-exibido3-excecao").removeClass("exibido");
			$(".efeito-exibido4-excecao").removeClass("exibido");
			$(".efeito-exibido2-excecao").addClass("exibido");
		}
		 if($(this).scrollTop() > 820 && $(this).scrollTop() < 1300) {
			$(".efeito-exibido2-excecao").removeClass("exibido");
			$(".efeito-exibido1-excecao").removeClass("exibido");
			$(".efeito-exibido4-excecao").removeClass("exibido");
			$(".efeito-exibido3-excecao").addClass("exibido");
		}
		if($(this).scrollTop() > 1300) {
			$(".efeito-exibido3-excecao").removeClass("exibido");
			$(".efeito-exibido1-excecao").removeClass("exibido");
			$(".efeito-exibido2-excecao").removeClass("exibido");
			$(".efeito-exibido4-excecao").addClass("exibido");
		}
	})

	//FIM EFEITO COM CLASSES ESPECIAIS
	$(".abrir-menu").click(function() {
		$(".abrir-menu").toggleClass("menu-rodado");
		$(".cabecalho").toggleClass("menu-aberto");
		$(".apagar-hidden").removeClass("apagar-show");
		$(".menu-distracao-desligado").toggleClass("menu-distracao-ligado-mobile");
	})

	$("#combater").click(function() {
		$(".container").load("combate.php");
	})
	$("#criar").click(function() {
		$(".container").load("criar.php");
	})

})