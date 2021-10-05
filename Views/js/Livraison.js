$(function()
{
	$("#form_livraison").validate(
		{

		rules: {
			nom:  {
				required: true,
				minlength: 2
			},
			prenom: {
				required: true,
				minlength: 2
			},
			address: {
				required: true,
				minlength: 3
			},
			city: {
				required: true,
				minlength: 3
			},		
			pincode: {
				required: true,
				number : true,
				minlength: 4,
				maxlength: 4
			},		
		},

		messages: {
			nom: {
				required: "Champ obligatoire",
				minlength: " Le titre doit contenir au moins 2 caractères",
			},
			prenom: {
				required: "Champ obligatoire",
				minlength: " La description doit contenir au moins 2 caractères",
			},
			address: {
				required: "Champ obligatoire",
				minlength: " L'address doit contenir au moins 3 caractères",
			},
			city: {
				required: "Champ obligatoire",
				minlength: " City doit contenir au moins 3 caractères",
			},
			pincode: {
				required: "Champ obligatoire",
				number: " Le pincode doit contenir des numeros",
				minlength: " Le pincode doit contenir au moins 4 caractères",
				maxlength: " Le pincode doit contenir au maximom 4 caractères",
			},
		}
	});
});