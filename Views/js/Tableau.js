$(function()
{
	$("#from_tableau").validate(
		{

		rules: {
			nom:  {
				required: true,
				minlength: 2
			},
			prix: {
				required: true,
				number: true
			},
			informations: {
				required: true,
				minlength: 5
			},
		},

		messages: {
			nom: {
				required: "Champ obligatoire",
				minlength: " Le nom doit contenir au moins 2 caractères",
			},
			prix: {
				required: "Champ obligatoire",
				number: " Le Prix doit contenir des numeros",
			},
			informations: {
				required: "Champ obligatoire",
				minlength: " L informations doit contenir au moins 5 caractères",
			},


		}
	});
});