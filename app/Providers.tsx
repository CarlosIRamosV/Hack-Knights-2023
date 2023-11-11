"use client";

import * as React from "react";
import { useState } from "react";

function Account({ children }: { children: React.ReactNode }) {
  const [user, setUser] = useState();

  return children;
}

export default Account;
