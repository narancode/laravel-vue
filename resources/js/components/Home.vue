<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-8 form-section">
                <h4 class="mb-3">List of employee</h4>
                <table class="table">
                    <caption>
                        List of employee
                    </caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Naran code</td>
                            <td>example@gmail.com</td>
                            <td>1234567890</td>
                            <td>
                                <span class="mr-2">
                                    <font-awesome-icon icon="trash-alt"  :style="{ color: 'red' }" />
                                </span>
                                <span>
									<font-awesome-icon :icon="['fas', 'user-edit']" />
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <form>
                    <div class="form-row form-section">
                        <h4 class="mb-3">Add Employee Info</h4>
                        <div class="col-12 mb-3">
                            <label
                                class="form-label form-label-top"
                                for="firstName"
                                >First Name
                                <span class="form-required">*</span>
                            </label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="First Name"
                            />
                        </div>
                        <div class="col-12 mb-3">
                            <label
                                class="form-label form-label-top"
                                for="lastName"
                                >Last Name
                                <span class="form-required">*</span>
                            </label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Last Name"
                            />
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label form-label-top" for="email"
                                >Email
                                <span class="form-required">*</span></label
                            >
                            <input
                                type="email"
                                class="form-control"
                                placeholder="Email"
                            />
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label form-label-top" for="email"
                                >Phone No.
                                <span class="form-required">*</span></label
                            >
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Phone No."
                            />
                        </div>
                        <div class="col-12 mb-3">
                            <label
                                class="form-label form-label-top"
                                for="currentExperience"
                                >Current Experience</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Current Experience"
                            />
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label form-label-top" for="city"
                                >City</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                placeholder="City"
                            />
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label form-label-top" for="state"
                                >State</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                placeholder="State"
                            />
                        </div>

                        <div class="col-12 mb-3">
                            <label
                                class="form-label form-label-top"
                                for="fullName"
                                >Gender</label
                            >
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="gridRadios"
                                    id="gridRadios1"
                                    value="option1"
                                    checked
                                />
                                <label
                                    class="form-check-label"
                                    for="gridRadios1"
                                >
                                    Male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="gridRadios"
                                    id="gridRadios2"
                                    value="option2"
                                />
                                <label
                                    class="form-check-label"
                                    for="gridRadios2"
                                >
                                    Female
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            SUBMIT
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },
};
</script>

<style scope>
.form-label-top {
    width: 100%;
    margin-left: 2px;
    margin-bottom: 10px;
}

.form-label {
    color: #2c3345;
    display: inline-block;
    font-size: 16px;
    font-weight: 500;
    word-break: break-word;
}

.form-required {
    color: #f23a3c;
}

.form-section {
    border-radius: 10px;
    overflow: hidden;
    padding: 62px 55px 65px;
    box-shadow: 0 3px 20px 0 rgb(0 0 0 / 10%);
    -moz-box-shadow: 0 3px 20px 0 rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 3px 20px 0 rgb(0 0 0 / 10%);
    -o-box-shadow: 0 3px 20px 0 rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 3px 20px 0 rgba(0, 0, 0, 0.1);
}

input.form-control {
    height: 44px;
}

tbody,
td,
tfoot,
th,
thead,
tr {
    line-height: 48px;
}

.mr-2 {
    margin-right: 10px;
}
</style>
