import AuthenticatedLayoutAdmin from "@/Layouts/AuthenticatedLayoutAdmin";
import BodyContentLayout from "@/Layouts/BodyContentLayout";
import { Head, usePage } from "@inertiajs/react";

export default function Payrolls() {
    return (
        <AuthenticatedLayoutAdmin
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    {usePage().component}
                </h2>
            }
        >
            <Head title="Payrolls" />

            <BodyContentLayout headerName={"Payrolls"}></BodyContentLayout>
        </AuthenticatedLayoutAdmin>
    );
}