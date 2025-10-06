function formatNumber(value) {
	if (isNaN(value)) return "-";
	if (value === null || value === undefined) return "-";

	return Number(value).toLocaleString("de-DE");
}

// Function to format number to Rupiah style
function formatRupiah(value) {
	if (isNaN(value)) return "-";
	if (value === null || value === undefined) return "-";

	return (
		"Rp " +
		parseInt(value).toLocaleString("id-ID", {
			minimumFractionDigits: 0,
			maximumFractionDigits: 0,
		})
	);
}

// Function to convert number in de-DE locale to number
function convertNumber(value) {
	if (isNaN(value)) return "-";
	if (value === null || value === undefined) return "-";

	return Number(value.replace(/\./g, "").replace(/,/g, "."));
}

// Function to convert float to have 3 decimal points
function convertFloat3(value) {
	if (isNaN(value)) return "-";
	if (value === null || value === undefined) return "-";

	return parseFloat(value).toFixed(3);
}

// Function to convert seconds to HH:MM:SS
function secondsToHMS(seconds) {
	if (isNaN(seconds)) return "-";
	if (seconds === null || seconds === undefined) return "-";

	var hours = Math.floor(seconds / 3600);
	var minutes = Math.floor((seconds % 3600) / 60);
	var seconds = parseInt(seconds % 60, 10);
	return hours + "h " + minutes + "m " + seconds + "s";
}

// Function to convert seconds to DD:HH:MM:SS
function secondsToDHMS(seconds) {
	if (isNaN(seconds)) return "-";
	if (seconds === null || seconds === undefined) return "-";

	var days = Math.floor(seconds / (24 * 3600));
	seconds -= days * 24 * 3600;
	var hours = Math.floor(seconds / 3600);
	var minutes = Math.floor((seconds % 3600) / 60);
	var seconds = parseInt(seconds % 60, 10);
	return days + "d " + hours + "h " + minutes + "m " + seconds + "s";
}

// Function to convert "YYYY-MM-DD" to "DD/MM/YYYY"
function formatDate(date) {
	if (!date) return "-";
	if (date === "0000-00-00") return "-";
	if (date === "1970-01-01") return "-";

	return date.split("-").reverse().join("/");
}

// Function to convert "YYYY-MM-DD" to "DD MMM YYYY"
function formatDateCompact(date) {
	if (!date) return "-";
	if (date === "0000-00-00") return "-";
	if (date === "1970-01-01") return "-";

	const months = [
		"Jan",
		"Feb",
		"Mar",
		"Apr",
		"May",
		"Jun",
		"Jul",
		"Aug",
		"Sep",
		"Oct",
		"Nov",
		"Dec",
	];
	const [year, month, day] = date.split("-");
	return `${day} ${months[parseInt(month) - 1]} ${year}`;
}

// Function to convert "YYYY-MM-DD hh:is:ss" to "DD/MM/YYYY hh:is:ss"
function formatDateTimeCompact(dateTime) {
	if (!dateTime) return "-";
	if (dateTime === "0000-00-00 00:00:00") return "-";
	if (dateTime === "1970-01-01 00:00:00") return "-";

	const months = [
		"Jan",
		"Feb",
		"Mar",
		"Apr",
		"May",
		"Jun",
		"Jul",
		"Aug",
		"Sep",
		"Oct",
		"Nov",
		"Dec",
	];
	const [date, time] = dateTime.split(" ");
	const [year, month, day] = date.split("-");
	return `${day} ${months[parseInt(month) - 1]} ${year} ${time}`;
}

// Function to convert number to currency in Indonesian
function formatRupiah(value) {
	if (value === null || value === undefined) {
		return "Rp -";
	}
	var value = parseFloat(value);
	if (isNaN(value)) {
		return "Rp -";
	}

	return (
		"Rp " +
		value
			.toFixed(2)
			.replace(".", ",")
			.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
	);
}

// Icon functions
var addIcon = function (cell, formatterParams) {
	return "<i class='fas fa-plus'></i>";
};

var viewIcon = function (cell, formatterParams) {
	return "<i class='fas fa-eye'></i>";
};

var editIcon = function (cell, formatterParams) {
	return "<i class='fas fa-edit'></i>";
};

var deleteIcon = function (cell, formatterParams) {
	return "<i class='fas fa-trash'></i>";
};

var saveIcon = function (cell, formatterParams) {
	return "<i class='fas fa-save'></i>";
};

var cancelIcon = function (cell, formatterParams) {
	return "<i class='fas fa-times'></i>";
};

var downloadIcon = function (cell, formatterParams) {
	return "<i class='fa-solid fa-download'></i>";
};

var userselectIcon = function (cell, formatterParams) {
	return "<i class='fa-solid fa-users-viewfinder'></i>";
};

var userplusIcon = function (cell, formatterParams) {
	return "<i class='fa-solid fa-user-plus'></i>";
};

var userminusIcon = function (cell, formatterParams) {
	return "<i class='fa-solid fa-user-minus'></i>";
};

var approveIcon = function (cell, formatterParams) {
	return '<i class="fa-solid fa-check-to-slot"></i>';
};

var rejectIcon = function (cell, formatterParams) {
	return '<i class="fa-solid fa-xmark-to-slot"></i>';
};

var unlockIcon = function (cell, formatterParams) {
	return '<i class="fa-solid fa-unlock"></i>';
};

var lockIcon = function (cell, formatterParams) {
	return '<i class="fa-solid fa-lock"></i>';
};

var keyIcon = function (cell, formatterParams) {
	return '<i class="fas fa-key"></i>';
};

var bankIcon = function (cell, formatterParams) {
	return '<i class="fa-solid fa-building-columns"></i>';
};

var listOlIcon = function (cell, formatterParams) {
	return '<i class="fa-solid fa-list-ol"></i>';
};

var tagIcon = function (cell, formatterParams) {
	return '<i class="fa-solid fa-tag"></i>';
};

var tagsIcon = function (cell, formatterParams) {
	return '<i class="fa-solid fa-tags"></i>';
};

var filePDFIcon = function (cell, formatterParams) {
	return '<i class="fa-solid fa-file-pdf"></i>';
};

var stampIcon = function (cell, formatterParams) {
	return '<i class="fa-solid fa-stamp"></i>';
};

var elipsisVerticalIcon = function (cell, formatterParams) {
	return '<i class="fa-solid fa-ellipsis-vertical"></i>';
};

var truckFrontIcon = function (cell, formatterParams) {
	return '<i class="fa-solid fa-truck-front"></i>';
};

document.addEventListener("DOMContentLoaded", function () {
	// Function to format numbers according to the specified locale with custom separators
	function formatNumberLocale(value) {
		// Parse the value as a float, then format it with three decimal places
		// Specify the use of '.' for thousands and ',' for decimal separator
		return new Intl.NumberFormat("de-DE", {
			// 'de-DE' uses '.' as thousand and ',' as decimal separator
			minimumFractionDigits: 3,
			maximumFractionDigits: 3,
		}).format(value);
	}

	// Attach event listeners to inputs for real-time formatting
	document.querySelectorAll(".numeric-input").forEach(function (input) {
		input.addEventListener("focus", function () {
			// Remove formatting when the input is focused to edit
			// Adjust regex to account for '.' as thousand separator without altering the decimal comma
			let value = this.value.replace(/\./g, "").replace(",", ".");
			this.value = value;
		});

		input.addEventListener("blur", function () {
			// Reapply formatting when the input loses focus
			// Convert the value to a format that parseFloat can understand, then format it
			// First, normalize the input to ensure it uses '.' for decimals for parseFloat
			let normalizedValue = this.value.replace(/,/g, ".");
			let value = parseFloat(normalizedValue);
			if (!isNaN(value)) {
				// Format the number with the locale-specific formatting
				this.value = formatNumberLocale(value);
			}
		});
	});
});
