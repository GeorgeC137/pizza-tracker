import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";
import UpdatePizzaOrderForm from "./Partials/updatePizzaOrderForm";

export default function Edit({ auth, pizza }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                    Order #{pizza.id}
                </h2>
            }
        >
            <Head title={"Order #" + pizza.id} />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                        <div className="p-6 text-gray-900 dark:text-gray-100">
                            <UpdatePizzaOrderForm
                                pizza={pizza}
                                className="mx-w-xl"
                            ></UpdatePizzaOrderForm>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
