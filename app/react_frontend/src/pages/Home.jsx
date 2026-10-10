// frontend/src/pages/Home.jsx
import { Head } from '@inertiajs/react'

export default function Home({ message }) {
    return (
        <>
            <Head title="Home" />
            <h1>{message}</h1>
            <h2>Végre működik az inertia!!!</h2>
        </>
    )
}
