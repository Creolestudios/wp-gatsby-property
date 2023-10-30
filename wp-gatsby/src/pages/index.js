import React from "react"
import { Link, graphql } from "gatsby"
import Layout from "../components/layout"
import Seo from "../components/seo"

const BlogIndex = ({}) => {
  const postTypeLinks = [
    {
      label: "Property Listings (Click to view posts)",
      url: "/property",
    },
    {
      label: "New Property Listings (Click to view posts)",
      url: "/newproperty",
    },
  ]
  return (
    <Layout isHomePage>
      <Seo title="Home Page" />
      <div>
        <p>Explore different property listings:</p>
        <div>
          {postTypeLinks.map(({ label, url }) => (
            <Link to={url} key={url}>
              <button style={{ padding: "10px", marginBottom: "10px" }}>
                {label}
              </button>
            </Link>
          ))}
        </div>
      </div>
    </Layout>
  )
}

export default BlogIndex
