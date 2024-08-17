<style>
    .questionnaire-wrapper {
        background: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .questionnaire-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .questionnaire-title {
        font-size: 28px;
        font-weight: bold;
        color: #4a4a4a;
        margin: 0;
    }

    .icon-image {
        width: 30px;
        height: 30px;
        margin-left: 10px;
        vertical-align: middle;
    }

    .opacity {
        opacity: 0.3;
    }

    .option-label {
        display: flex;
        align-items: center;
        padding: 15px;
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        margin-bottom: 10px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        background-color: #fff;
    }

    .option-label:hover {
        background-color: #e6f9ff;
        transform: translateY(-3px);
    }

    .option-label input[type="radio"] {
        display: none;
    }

    .option-label input[type="radio"] + .custom-radio {
        position: relative;
        width: 24px;
        height: 24px;
        border: 2px solid #84C785;
        border-radius: 50%;
        margin-left: 15px;
        margin-right: 10px;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .option-label input[type="radio"]:checked + .custom-radio {
        background-color: #84C785;
        border-color: #84C785;
    }

    .option-label input[type="radio"]:checked + .custom-radio:after {
        content: '';
        position: absolute;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #fff;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .form-buttons {
        text-align: center;
        margin-top: 30px;
    }

    .custom-btn {
        background-color: #84C785;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-size: 16px;
        margin: 5px;
    }

    .custom-btn:hover {
        background-color: #6dc06e;
    }

    .collapse-button {
        background-color: #b3b3b3;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        text-align: right;
        transition: background-color 0.3s ease;
        margin-bottom: 10px;
    }

    .collapse-button:hover {
        background-color: #8a8a8a;
    }

    .collapse-content {
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        background-color: #fff;
    }

    .progress-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding: 0 20px;
    }

    .progress-step {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background-color: #e0e0e0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #fff;
        transition: background-color 0.3s;
    }

    .progress-step.active {
        background-color: #84C785;
    }

    .progress-line {
        flex: 1;
        height: 5px;
        background-color: #e0e0e0;
        margin: 0 10px;
        transition: background-color 0.3s;
    }

    .progress-line.active {
        background-color: #84C785;
    }

    textarea.form-control {
        width: 100%;
        border-radius: 8px;
        border: 1px solid #e0e0e0;
        padding: 10px;
        transition: border-color 0.3s;
    }

    textarea.form-control:focus {
        border-color: #84C785;
    }

    .answered {
        animation: highlight 1s ease-out;
    }

    .collapse-button.answered {
        background-color: #d4edda;
        border-color: #84C785;
        color: #333;
        font-weight: bold;
    }

    .form-step h3 {
        padding: 10px;
    }

    .select2-selection {
        height: 50px !important;
    }

    .select2-container--default .select2-selection--single {
        border: 1px solid #e0e0e0 !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        padding-top: 10px !important;
        padding-right: 20px !important;
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #84C785 !important;
    }

    .category-name {
        color: #84C785;
        font-weight: bolder;
    }

    .category-heading {
        font-size: 22px;
        color: #ffffff;
        background: linear-gradient(90deg, #84C785, #5fc060);
        padding: 10px 20px;
        border-radius: 8px;
        box-shadow: 0 2px 2px #84C785;
        text-align: center;
        margin-bottom: 2px;
        margin-top: 20px;
        letter-spacing: 1px;
    }


    .category-heading:hover {
        box-shadow: 0 4px 10px rgba(132, 199, 133, 0.32);
        transform: translateY(-1px);
        transition: all 0.4s ease;
    }

</style>
