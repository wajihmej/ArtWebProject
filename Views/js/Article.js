$(function()
{
	$("#form_article").validate(
		{

		rules: {
			titre:  {
				required: true,
				minlength: 2
			},
			description: {
				required: true,
				minlength: 5
			},
		},

		messages: {
			titre: {
				required: "Champ obligatoire",
				minlength: " Le titre doit contenir au moins 2 caractères",
			},
			description: {
				required: "Champ obligatoire",
				minlength: " La description doit contenir au moins 5 caractères",
			},


		}
	});
});