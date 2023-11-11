import type { Metadata } from "next";
import {
  SignInWithEmail,
  SignInWithGithub,
  SignInWithGoogle,
  SignInWithTwitter,
} from "@/app/components/Login";
import Soon from "@/app/components/alerts/soon";

export const metadata: Metadata = {
  title: "Login",
};

export default function Login() {
  return (
    <main>
      <Soon />
      <div className="w-full h-screen flex flex-col items-center justify-center px-4">
        <div className="max-w-sm w-full text-gray-600 space-y-8">
          <div className="text-center">
            <img
              src="https://floatui.com/logo.svg"
              width={150}
              className="mx-auto"
              alt={"Float UI logo"}
            />
            <div className="mt-5 space-y-2">
              <h3 className="text-gray-800 text-2xl font-bold sm:text-3xl">
                Log in to your account
              </h3>
              <p className="">
                Don't have an account?{" "}
                <a
                  href="../signup"
                  className="font-medium text-indigo-600 hover:text-indigo-500"
                >
                  Sign up
                </a>
              </p>
            </div>
          </div>
          <SignInWithEmail />
          <div className="relative">
            <span className="block w-full h-px bg-gray-300"></span>
            <p className="inline-block w-fit text-sm bg-white px-2 absolute -top-2 inset-x-0 mx-auto">
              Or continue with
            </p>
          </div>
          <div className="space-y-4 text-sm font-medium">
            <SignInWithGoogle />
            <SignInWithTwitter />
            <SignInWithGithub />
          </div>
          <div className="text-center">
            <a
              href="../forgot-password"
              className="text-indigo-600 hover:text-indigo-500"
            >
              Forgot password?
            </a>
          </div>
        </div>
      </div>
    </main>
  );
}
